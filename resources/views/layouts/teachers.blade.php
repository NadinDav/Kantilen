@section('teachers')
<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Наши преподаватели</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
        </div>
        <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            <li>
                <div class="flex items-top gap-x-6">
                    <img class="h-36 w-36 rounded-full" src="img/Моргачева2.jpg" alt="">
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Инна Моргачева</h3>
                        <p class="mt-6 text-sm leading-8 text-gray-600">Основатель и художественный руководитель хора "Кантилена".
                            Преподаватель высшей категории, лауреат международных конкурсов, преподаватель высшей категории.
                            Выпускница Минского музыкального училища им.М.Глинки и Белорусской государственной Академии Музыки</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="flex items-top gap-x-6">
                    <img class="h-36 w-36 rounded-full" src="img/Концертмейстер.jpg" alt="">
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Екатерина Катина</h3>
                        <p class="mt-6 text-sm leading-8 text-gray-600">Концертмейстер</p>
                    </div>
                </div>
            </li>

            <!-- More people... -->
        </ul>
    </div>
</div>
@endsection
