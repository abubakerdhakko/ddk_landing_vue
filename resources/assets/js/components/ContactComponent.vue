<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Contacts</li>
                </ol>
                <div class="card card-default">
                    <div class="card-header">Contacts Section</div>
                    <div class="card-body">
                        <form method="post" v-on:submit.prevent="update()">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Facebook</label>
                                <input required type="text" class="form-control" v-model="banner.facebook" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Instagram</label>
                                <input required type="text" class="form-control" v-model="banner.instagram" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Linkedin</label>
                                <input required type="text" class="form-control" v-model="banner.linkedin" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Docker</label>
                                <input required type="text" class="form-control" v-model="banner.telegram" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Reddit</label>
                                <input required type="text" class="form-control" v-model="banner.reddit" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Quora</label>
                                <input required type="text" class="form-control" v-model="banner.quora">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Stack Overflow</label>
                                <input required type="text" class="form-control" v-model="banner.stackoverflow" >
                            </div>
                            <div class="col-md-12" align="center">
                                <button class="btn btn-primary col-md-4">Save</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    var csrf_token = document.querySelector("meta[name='csrf-token']").attributes.content.value;
    export default {
        data: function(){
            return {
                banner: {
                    id: 1,
                    facebook: '',
                    instagram: '',
                    linkedin: '',
                    telegram: '',
                    reddit: '',
                    quora: '',
                    stackoverflow: ''

                }
            }
        },
        methods:{
            update: function(){
                this.$http.put('/api/contact', JSON.stringify(this.banner), {headers: window.myheaders})
                          .then(res => {
                                $.Toast("Success", "Banner Successfully Updated.", "success", {});
                          })
            },
            init: function(){
                this.$http.get('/api/contact', {headers: window.myheaders})
                      .then(res => {
                          this.banner = res.body[0];
                      });
            }
        },
        mounted() {
            this.init();
            // $.Toast("test", "this is a test message.", "success", {});
        }
    }
</script>
