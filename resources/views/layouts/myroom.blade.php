<x-app-layout>
   @section('title','ルーム0000号室')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <label for="user-name">ニックネーム</label><br>
                   <input type="text" class="rounded" id="user-name" required><br>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                   <label for="user-pass">パスコード設定</label><br>
                   <input type="text" class="rounded" inputmode="numeric" pattern="\d*" id="user-pass" required><br>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>使われていない部屋番号を表示</p>
                </div>
            </div>
            <div>
              <input type="submit" class="pt-3 pb-3 pr-10 pl-10 mt-5 rounded bg-white border-b border-gray-200" value="入室">
            </div>
        </div>
    </div>
</x-app-layout>