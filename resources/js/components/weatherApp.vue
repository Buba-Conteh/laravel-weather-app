<template>
     <div>
        <div class="card w-50 mx-auto pt">
             <div class="card-header bg-dark text-light pt-5">
               <div class="row">
                   <div class="col-4">
                       <h1>
                        {{currentTemprature.actual}} <span> <sup>o</sup>C</span>
                       </h1>
                       <p>Fell like {{currentTemprature.feels}}<span> <sup>o</sup>C</span></p>
                   </div>
                   <div class="col-5">
                       <p><b v-text="currentTemprature.summary"> Clear</b></p>
                       <p>Serrekunda, Gambia</p>
                   </div>
                   <div class="col-3">
                    <!-- <canvas id="icon1" width="128" height="128"></canvas> -->
                   </div>
               </div>
             </div>
             <div class="card-body bg-secondary text-light">
                <div class="row" v-for="(day, index) in daily" :key="index">
                    <div class="col-12 py-2">
                        <div class="row">
                            <div class="col-2">Mon</div>
                            <div class="col-8">{{day.summary}}</div>
                            <div class="col-2"> <span>{{day.apparentTemperatureHigh}} <sup>o</sup>C</span></div>
                        </div>
                        <hr>
                    </div>
                    
                   
                        <hr>
                 </div>
                 
            </div>
             </div>
            
 </div>
    
</template>

<script>
export default {
        mounted() {
            // console.log('Component mounted.');
             this.weatherData()
        },
        data(){
           return {
            location:{
                name:'serekunda',
                lat:13.4,
                lng:15.3
            },
             daily:[],
            currentTemprature:{
                actual:'',
               feels:'',
               summary:'',
              icone:''
            }
            }
        },
        methods:{
            weatherData(){
                

                  fetch(`/api/weather?lat=${this.location.lat}&lng=${this.location.lng}&name=${this.location.name}`)
            .then(res=>res.json()).then(data=>{
                console.log(data);
                
                this.currentTemprature.actual=Math.round(data.currently.temperature);
                this.currentTemprature.feels=Math.round(data.currently.apparentTemperature);
                this.currentTemprature.summary=data.currently.summary;
                this.currentTemprature.icone=this.dashed(data.currently.icon);
                this.daily=data.daily.data;

            })
            },
          dashed(str){
               return str.split(' ').join('-');
            }
        }
        
    }
</script>
