<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel</title>
</head>
<body class="antialiased">
<div class="flex items-center justify-center h-screen">
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-6 sm:px-6">
            <h3 class="text-base font-semibold leading-7 text-gray-900">API Documentation</h3>
            {{--            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and application.</p>--}}
        </div>
        <div class="border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-base font-medium text-gray-900">Generate API key</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <span class="inline-flex items-center rounded-md bg-green-50 px-4 py-2 text-sm font-medium text-green-700 ring-1 ring-inset ring-blue-700/10">[GET]&nbsp;&nbsp;&nbsp;&nbsp;/generate-key</span>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-base font-medium text-gray-900">Lista kursów walut z danego dnia</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <span class="inline-flex items-center rounded-md bg-green-50 px-4 py-2 text-sm font-medium text-green-700 ring-1 ring-inset ring-blue-700/10">[GET]&nbsp;&nbsp;&nbsp;&nbsp;/api/exchange-rates?date=2023-05-01</span>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-base font-medium text-gray-900">Pobranie kursu dla wybranej waluty z danego dnia</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <span class="inline-flex items-center rounded-md bg-green-50 px-4 py-2 text-sm font-medium text-green-700 ring-1 ring-inset ring-blue-700/10">[GET]&nbsp;&nbsp;&nbsp;&nbsp;/api/exchange-rates/currency?date=2023-05-01&amp;currency=usd</span>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-base font-medium text-gray-900">Dodanie kursu waluty</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <span class="inline-flex items-center mb-4 rounded-md bg-pink-50 px-4 py-2 text-sm font-medium text-pink-700 ring-1 ring-inset ring-blue-700/10">[POST]&nbsp;&nbsp;&nbsp;&nbsp;/api/add-rate</span>
                        <br>
                        <p class="text-sm mt-3 mb-2 font-medium text-gray-700">API key</p>
                        <span class="inline-flex items-center mb-4 rounded-md bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 ring-1 ring-inset ring-blue-700/10">
                                <code>
                                    Key: 'authorization'<br>
                                    Value: 'Your API key'<br>
                                </code>
                            </span> <br>
                        <p class="text-sm mt-3 mb-2 font-medium text-gray-700">Query</p>
                        <span class="inline-flex items-center mb-4 rounded-md bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 ring-1 ring-inset ring-blue-700/10">
                                <code>
                                    'currency' = 'usd' <br>
                                    'amount' = '4.15' <br>
                                    'date' = 'y-m-d' <br>
                                </code>
                            </span> <br>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>
</body>
</html>
