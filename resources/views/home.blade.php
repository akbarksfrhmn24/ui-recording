<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen">
    <section class="flex mx-4 mt-10 gap-4 items-center">
        <h1
            class="flex-1 shrink self-stretch my-auto text-2xl font-bold tracking-tight leading-none text-indigo-900 basis-4">
            👋🏻 Hi, Erin!
        </h1>
        <a href="/profile"
            class="flex gap-2.5 items-center self-stretch p-2 my-auto bg-gray-100 h-[46px] rounded-[100px] w-[46px]">
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/5ce408fbde62952b2eccd7f2474555b7e36116f31d10604b4bb909e589c56c12?placeholderIfAbsent=true&apiKey=557743eb3b3844f9871bd86f8ee37bd6"
                class="object-contain aspect-square w-[30px]" alt="User profile picture" />
        </a>
    </section>

    <a href="/kambing" class="flex gap-2.5 mx-4 mt-10 py-4 items-center px-4 bg-gray-100 rounded-xl">
        <h2
            class="flex-1 shrink self-stretch my-auto text-xl font-bold tracking-tight leading-tight text-indigo-900 basis-0">
            Kambing
        </h2>
        <figure class="flex flex-col justify-center self-stretch p-1 my-auto w-[94px]">
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/d155c8d732608b343c6799f7a583940089fb03101cc88a098ceb74a7c76cf3ae?placeholderIfAbsent=true&apiKey=557743eb3b3844f9871bd86f8ee37bd6"
                class="object-contain aspect-[1.12] w-[86px]" alt="Kambing illustration" />
        </figure>
    </a>

    <a href="/kambing" class="flex gap-2.5 mx-4 mt-10 py-4 items-center px-4 bg-gray-100 rounded-xl">
        <h2
            class="flex-1 shrink self-stretch my-auto text-xl font-bold tracking-tight leading-tight text-indigo-900 basis-0">
            Perawatan
        </h2>
        <figure class="flex flex-col justify-center self-stretch p-1 my-auto w-[94px]">
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/0edb559c635caa99429bebd1744d4519126dbba4b210e153c698ccb2d7012936?placeholderIfAbsent=true&apiKey=557743eb3b3844f9871bd86f8ee37bd6"
                class="object-contain aspect-[1.12] w-[86px]" alt="Kambing illustration" />
        </figure>
    </a>

    <x-footer></x-footer>
</body>

</html>
