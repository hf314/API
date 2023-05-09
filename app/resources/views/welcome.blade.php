<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel</title>
</head>
<body class="antialiased">
<div class="flex items-center justify-center mt-10 mb-10">
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-6 sm:px-6">
            <h3 class="text-base font-semibold leading-7 text-gray-900">API Documentation</h3>
            {{--            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and application.</p>--}}
        </div>
        <div class="border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-base font-medium text-gray-700">Generate API key</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
{{--                        <span class="inline-flex items-center rounded-md bg-pink-50 px-4 py-2 text-sm font-medium text-pink-700 ring-1 ring-inset ring-blue-700/10">[POST]</span>--}}
                        <span class="inline-flex items-center rounded-md bg-pink-50 px-4 py-2 text-sm font-medium text-pink-700 ring-1 ring-inset ring-blue-700/10">[POST]&nbsp;&nbsp;&nbsp;&nbsp;/api/generate-key</span>
                        <br> <p class="text-sm mt-3 mb-2 font-medium text-gray-700">Use these permissions <br> &bull; observer <br> &bull; editor</p>
                        <p class="text-sm mt-3 mb-2 font-medium text-gray-700">Body</p>
                        <span class="inline-flex items-center mb-4 rounded-md bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 ring-1 ring-inset ring-blue-700/10">
                                <code>
                                    <pre>{"permissions": ". . ."}</pre>
                                </code>
                            </span> <br>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-base font-medium text-gray-700">Lista kursów walut z danego dnia</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <span class="inline-flex items-center rounded-md bg-green-50 px-4 py-2 text-sm font-medium text-green-700 ring-1 ring-inset ring-blue-700/10">observer</span>
                        <span class="inline-flex items-center rounded-md bg-green-50 px-4 py-2 text-sm font-medium text-green-700 ring-1 ring-inset ring-blue-700/10">[GET]&nbsp;&nbsp;&nbsp;&nbsp;/api/exchange-rates?date=2000-01-01</span>
                        <p class="text-sm mt-3 mb-2 font-medium text-gray-700">Headers</p>
                        <span class="inline-flex items-center mb-4 rounded-md bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 ring-1 ring-inset ring-blue-700/10">
                                <code>
                                    <pre>Header name: 'authorization'</pre>
                                    <pre>Header value: 'Your API key'</pre>
                                </code>
                            </span> <br>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-base font-medium text-gray-700">Pobranie kursu dla wybranej waluty z danego dnia</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <span class="inline-flex items-center rounded-md bg-green-50 px-4 py-2 text-sm font-medium text-green-700 ring-1 ring-inset ring-blue-700/10">observer</span>
                        <span class="inline-flex items-center rounded-md bg-green-50 px-4 py-2 text-sm font-medium text-green-700 ring-1 ring-inset ring-blue-700/10">[GET]&nbsp;&nbsp;&nbsp;&nbsp;/api/exchange-rates/currency?date=2000-01-01&amp;currency=usd</span>
                        <p class="text-sm mt-3 mb-2 font-medium text-gray-700">Headers</p>
                        <span class="inline-flex items-center mb-4 rounded-md bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 ring-1 ring-inset ring-blue-700/10">
                                <code>
                                    <pre>Header name: 'authorization'</pre>
                                    <pre>Header value: 'Your API key'</pre>
                                </code>
                            </span> <br>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-base font-medium text-gray-700">Dodanie kursu waluty</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <span class="inline-flex items-center mb-4 rounded-md bg-pink-50 px-4 py-2 text-sm font-medium text-pink-700 ring-1 ring-inset ring-blue-700/10">editor</span>
                        <span class="inline-flex items-center mb-4 rounded-md bg-pink-50 px-4 py-2 text-sm font-medium text-pink-700 ring-1 ring-inset ring-blue-700/10">[POST]&nbsp;&nbsp;&nbsp;&nbsp;/api/exchange-rates</span>
                        <br>
                        <p class="text-sm mt-3 mb-2 font-medium text-gray-700">Headers</p>
                        <span class="inline-flex items-center mb-4 rounded-md bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 ring-1 ring-inset ring-blue-700/10">
                                <code>
                                    <pre>Header name: 'authorization'</pre>
                                    <pre>Header value: 'Your API key'</pre>
                                </code>
                            </span> <br>
                        <p class="text-sm mt-3 mb-2 font-medium text-gray-700">Body</p>
                        <span class="inline-flex items-center mb-4 rounded-md bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 ring-1 ring-inset ring-blue-700/10">
                                <code>
                                    {"currency": "usd", "amount": "4.15", "date": "y-m-d"} <br>
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
