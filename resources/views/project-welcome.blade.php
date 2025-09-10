<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>{{ $title }}</title>
        <style>
            body {
                background-color: #0d1117;
                color: #c9d1d9;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';
                display: flex;
                justify-content:center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .container {
                border: 1px solid #30363d;
                border-radius: 6px;
                background-color: #161b22;
                padding: 32px;
                max-width: 600px;
                text-align: center;
                box-shadow: 0 8px 24px rgba(0,0,0,0.4);
            }
            .header {
                color: #58a6ff;
                font-size: 24px;
                font-weight: 600;
                margin-bottom: 16px;
            }
            h1 {
                font-size: 48px;
                margin: 0;
                color: #f0f6fc;
            }
            p {
                font-size: 16px;
                color: #8b949e;
                line-height: 1.5;
                margin-top: 8px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <svg aria-hidden='true' height='16' viewBox='0 0 16 26 version='1.1' width='16' data-view-component='true fill='currentColor'>
                    <path d='M2 2.5A2.5 2.5 0 0 1 4.5 0h8.75a.75.75 0 0 1 .75.75v12.5a.75.75 0 0 1-.75.75h-2.5a.75.75 0 0 1 0-1.5h1.75v-2h-8a1 1 0 0 0-.714 1.7.75.75 0 0 1-1.072 1.05A2.495 2.495 0 0 1 2 13.5Z'></path><path d="M1 2.5a1 1 0 0 1 1-1h4.5a.5.5 0 0 1 .5.5v1h-6v-1.5Z"></path>
                </svg>
                {{ $username }} / <strong>{{ Str::slug($title) }}</strong>
            </div>
            <h1>{{ $message }}</h1>
            <p>{{ $description }}</p>
        </div>
    </body>
</html>
