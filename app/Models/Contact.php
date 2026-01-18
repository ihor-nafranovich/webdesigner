<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * Поля, разрешенные для массового присвоения
     */
    protected $fillable = [
        'name',
        'email',
        'message',
        'status',
    ];

    /**
     * Значения по умолчанию для атрибутов
     */
    protected $attributes = [
        'status' => 'new',
    ];

    /**
     * Константы для статусов
     */
    const STATUS_NEW = 'new';
    const STATUS_READ = 'read';
    const STATUS_REPLIED = 'replied';

    /**
     * Get all possible statuses
     */
    public static function getStatuses(): array
    {
        return [
            self::STATUS_NEW => 'Новое',
            self::STATUS_READ => 'Прочитано',
            self::STATUS_REPLIED => 'Отвечено',
        ];
    }

    /**
     * Check if contact is new
     */
    public function isNew(): bool
    {
        return $this->status === self::STATUS_NEW;
    }

    /**
     * Check if contact is read
     */
    public function isRead(): bool
    {
        return $this->status === self::STATUS_READ;
    }

    /**
     * Check if contact is replied
     */
    public function isReplied(): bool
    {
        return $this->status === self::STATUS_REPLIED;
    }

    /**
     * Scope для получения новых сообщений
     */
    public function scopeNew($query)
    {
        return $query->where('status', self::STATUS_NEW);
    }

    /**
     * Scope для получения прочитанных сообщений
     */
    public function scopeRead($query)
    {
        return $query->where('status', self::STATUS_READ);
    }

    /**
     * Scope для получения отвеченных сообщений
     */
    public function scopeReplied($query)
    {
        return $query->where('status', self::STATUS_REPLIED);
    }
}
