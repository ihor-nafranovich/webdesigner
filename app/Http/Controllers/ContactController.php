<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactNotification;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Сохранить контактное сообщение
     *
     * @param StoreContactRequest $request
     * @return RedirectResponse
     */
    public function store(StoreContactRequest $request): RedirectResponse
    {
        // Создаем запись в базе данных
        $contact = Contact::create($request->validated());

        // Отправляем email уведомление администратору
        try {
            Mail::to(config('mail.from.address'))
                ->send(new ContactNotification($contact));
        } catch (\Exception $e) {
            // Логируем ошибку, но не показываем пользователю
            \Log::error('Failed to send contact notification email: ' . $e->getMessage());
        }

        // Возвращаем пользователя назад с сообщением об успехе
        return redirect()->back()
            ->with('success', 'Спасибо! Ваше сообщение успешно отправлено. Я свяжусь с вами в ближайшее время.');
    }
}
