<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Banner</li>
                </ol>
                <div class="card card-default">
                    <div class="card-header">Banner Section</div>
                    <div class="card-body">
                        <form method="post" v-on:submit.prevent="update()">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input type="text" class="form-control" v-model="banner.heading" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Percentage</label>
                                <input type="text" class="form-control" v-model="banner.progress_percent">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea type="text" class="form-control" v-model="banner.description" ></textarea>
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
                    heading: '',
                    description: '',
                    progress_percent: 0,
                }
            }
        },
        methods:{
            update: function(){
                this.$http.put('/api/banner', JSON.stringify(this.banner), {headers: window.myheaders})
                          .then(res => {
                                $.Toast("Banner Successfully Updated.", "success", {});
                          })
            },
            init: function(){
                this.$http.get('/api/banner', {headers: window.myheaders})
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
