<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новое сообщение с сайта</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }
        .content {
            background: #f8f9fa;
            padding: 30px;
            border: 1px solid #e9ecef;
            border-top: none;
        }
        .info-block {
            background: white;
            padding: 20px;
            margin: 15px 0;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }
        .label {
            font-weight: 600;
            color: #667eea;
            margin-bottom: 5px;
            display: block;
        }
        .value {
            color: #333;
            margin-bottom: 15px;
        }
        .footer {
            text-align: center;
            color: #666;
            font-size: 14px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="margin: 0;">📧 Новое сообщение с сайта портфолио</h1>
    </div>

    <div class="content">
        <p>Вы получили новое сообщение через контактную форму вашего сайта портфолио.</p>

        <div class="info-block">
            <span class="label">👤 Имя:</span>
            <div class="value">{{ $contact->name }}</div>
        </div>

        <div class="info-block">
            <span class="label">📧 Email:</span>
            <div class="value">
                <a href="mailto:{{ $contact->email }}" style="color: #667eea; text-decoration: none;">
                    {{ $contact->email }}
                </a>
            </div>
        </div>

        <div class="info-block">
            <span class="label">💬 Сообщение:</span>
            <div class="value" style="white-space: pre-wrap;">{{ $contact->message }}</div>
        </div>

        <div class="footer">
            <p>Дата и время: {{ $contact->created_at->format('d.m.Y H:i') }}</p>
            <p style="margin: 0; color: #999;">Это автоматическое уведомление с вашего сайта портфолио.</p>
        </div>
    </div>
</body>
</html>

