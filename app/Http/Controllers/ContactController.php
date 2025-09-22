<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Exception;
use Illuminate\Support\Facades\Cache;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        try {
            $data = $request->validated();
            $phone = $data['phone'];
            $ip = $request->ip();

            $cacheKey = 'recent_application_' . $ip . '_' . $phone;
            if (Cache::has($cacheKey)) {
                return redirect()->route('index')->with('error', 'Вы уже отправляли заявку недавно. Пожалуйста, подождите 5 минут.')->withInput();
            }

            Contact::create([
                'name' => $data['name'],
                'phone' => $phone,
            ]);

            Cache::put($cacheKey, true, now()->addMinutes(5));

            return redirect()->route('index')->with('success', 'Заявка успешно добавлена!');
        } catch (Exception $e) {
            return redirect()->route('index')->with('error', 'Такая заявка уже существует!');
        }
    }
}
