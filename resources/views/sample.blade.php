<x-vuetmp>
    <x-slot:body>
        <button @click="getDogImage">犬を取得</button>
        <img :src="dogImage" class="dog">
        <input type="text" v-model="watchTest">
    </x-slot:body>
    <x-slot:outbody>

    </x-slot:outbody>
    <x-slot:script>
    const url = 'https://dog.ceo/api/breeds/image/random'
    const options = {
    method: 'get'
    }

    let app = new Vue({
        el:'#app',
        data(){
          return {
            dogImage: '',
            watchTest: ''
          }
        },
        methods:{
          async getDogImage(){
              const response = await fetch(url, options)
              .then( response => response.json() )
{{--              console.log(response.message)--}}
                this.dogImage = response.message
          }
        },
        watch:{
            watchTest(){
                this.watchDogImage()
            }
        },
        created(){
            this.getDogImage()
            this.watchDogImage = _.debounce(this.getDogImage, 1000)
        }
    })
    </x-slot:script>
</x-vuetmp>

