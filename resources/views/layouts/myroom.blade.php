<x-app-layout>
   @section('title',$roomNumber.'号室')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                   <h1>{{ $roomNumber }}号室</h1>
                </div>

                <div class="p-6 bg-white border-b border-gray-200">

                   <h3>ランキング</h3>

                   <div>
                       <div>
                           //User一覧
                       </div>
                       <div>
                           //ユーザー編集
                       </div>
                   </div>

                   <div>
                       //Userの戦績ランキング
                   </div>

                   <div>
                       //戦績ログ5件くらい
                   </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>