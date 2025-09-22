<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - {{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <style>
            :root {
                color-scheme: light dark;
                font-family: "Instrument Sans", sans-serif;
                font-feature-settings: "rlig" 1, "calt" 1;
            }

            body {
                margin: 0;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background: radial-gradient(circle at top, #f0f4ff, #d9e2ff);
            }

            .card {
                width: min(400px, 92%);
                background: white;
                border-radius: 18px;
                box-shadow: 0 20px 60px -30px rgba(15, 23, 42, 0.6);
                padding: 32px;
                display: flex;
                flex-direction: column;
                gap: 24px;
            }

            .card h1 {
                margin: 0;
                font-size: 1.8rem;
                color: #1f2937;
                text-align: center;
                letter-spacing: -0.02em;
            }

            .field {
                display: flex;
                flex-direction: column;
                gap: 8px;
            }

            label {
                font-weight: 600;
                color: #111827;
                font-size: 0.95rem;
            }

            input[type="email"],
            input[type="password"] {
                border: 1px solid #d1d5db;
                border-radius: 12px;
                padding: 12px 14px;
                font-size: 1rem;
                transition: border-color 0.2s, box-shadow 0.2s;
            }

            input[type="email"]:focus,
            input[type="password"]:focus {
                outline: none;
                border-color: #4f46e5;
                box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15);
            }

            .actions {
                display: flex;
                flex-direction: column;
                gap: 12px;
            }

            button[type="submit"] {
                border: none;
                border-radius: 999px;
                padding: 14px 18px;
                font-weight: 600;
                font-size: 1rem;
                cursor: pointer;
                color: white;
                background: linear-gradient(135deg, #6366f1, #8b5cf6);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }

            button[type="submit"]:hover {
                transform: translateY(-1px);
                box-shadow: 0 15px 30px -18px rgba(79, 70, 229, 0.8);
            }

            .links {
                text-align: center;
                font-size: 0.95rem;
            }

            .links a {
                color: #4f46e5;
                text-decoration: none;
                font-weight: 500;
            }

            .links a:hover {
                text-decoration: underline;
            }

            @media (prefers-color-scheme: dark) {
                body {
                    background: radial-gradient(circle at top, #111827, #0f172a);
                }

                .card {
                    background: rgba(15, 23, 42, 0.95);
                    box-shadow: 0 20px 60px -28px rgba(15, 23, 42, 1);
                }

                .card h1 {
                    color: #e5e7eb;
                }

                label {
                    color: #f9fafb;
                }

                input[type="email"],
                input[type="password"] {
                    background: rgba(15, 23, 42, 0.6);
                    border-color: rgba(148, 163, 184, 0.5);
                    color: #e5e7eb;
                }

                input[type="email"]:focus,
                input[type="password"]:focus {
                    border-color: #818cf8;
                    box-shadow: 0 0 0 3px rgba(129, 140, 248, 0.18);
                }

                .links {
                    color: #cbd5f5;
                }
            }
        </style>
    </head>
    <body>
        <main class="card">
            <h1>Sign in to your account</h1>
            <form method="POST" action="#">
                @csrf
                <div class="field">
                    <label for="email">Email address</label>
                    <input id="email" type="email" name="email" placeholder="you@example.com" required autofocus />
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="••••••••" required />
                </div>
                <div class="actions">
                    <button type="submit">Log in</button>
                </div>
            </form>
            <div class="links">
                <a href="#">Forgot your password?</a>
            </div>
        </main>
    </body>
</html>