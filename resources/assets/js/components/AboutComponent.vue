
<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">About</li>
                </ol>
                <div class="card card-default">
                    <div class="card-header">Description Section</div>
                    <div class="card-body">
                        <form method="post" v-on:submit.prevent="update()">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea type="text" class="form-control" v-model="about.description" ></textarea>
                            </div>
                            <div class="col-md-12" align="center">
                                <button class="btn btn-primary col-md-4">Save</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">About List Section</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th align="right" style="text-align:right;min-width:200px;">Action</th>
                                        </tr>
                                    </thead>
                                        <transition-group tag="tbody" mode="out-in" name="slidefade">
                                            <tr v-for="item in about_list" :key="item.id">
                                                <td>{{item.description}}</td>
                                                <td align="right">
                                                    <button @click="editlist = item;" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#editmodal"><span class="fas fa-edit"></span></button> 
                                                    <button @click="deletelist(item.id)" class="btn btn-xs btn-danger"><span class="fas fa-trash"></span></button>
                                                </td>
                                            </tr>
                                        </transition-group>
                                </table>
                            </div>
                        </div>

                        <hr>
                        <form class="row" v-on:submit.prevent="addlist()">
                            <div class="col-md-8"><input class="form-control" v-model="new_list" type="text" required></div>
                            <div class="col-md-4"><button type="submit" class="btn btn-primary">Add</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editmodal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editmodal">Edit List</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div classs="col-md-12">
                        <input class="form-control" type="text" v-model="editlist.description">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" data-dismiss="modal" @click="updatelist()">Update</a>
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
                about: {
                    description: '',
                },
                new_list: '',
                about_list: [],
                editlist: {
                    id: 0,
                    description: '',
                }
            }
        },
        methods:{
            updatelist: function(){
                this.$http.put('/api/aboutlist', JSON.stringify(this.editlist), {headers: window.myheaders})
                          .then(res => {
                                $.Toast("success", "About List Item Successfully Added.", "success", {});
                          });
            },
            deletelist: function(id){
                this.$http.post('/api/deleteaboutlist/', {id: id}, {headers: window.myheaders})
                          .then(res => {
                                var list = this.about_list.filter(ls => ls.id == id)[0];
                                this.about_list.splice(this.about_list.indexOf(list), 1);
                                $.Toast("success", "About List Item Successfully Deleted.", "success", {});
                          });
            },
            addlist: function(){
                if(this.about_list.length > 4){
                    $.Toast("Wait", "Maximum Items You Can Add is 5", "warning", {});
                    return;
                }
                this.$http.post('/api/aboutlist', {new_list: this.new_list}, {headers: window.myheaders})
                          .then(res => {
                                this.about_list.push(res.body);
                                this.new_list = "";
                                $.Toast("success", "About List Item Successfully Added.", "success", {});
                          });
            },
            update: function(){
                this.$http.put('/api/about', JSON.stringify(this.about), {headers: window.myheaders})
                          .then(res => {
                                $.Toast("success", "About Description Successfully Updated.", "success", {});
                          })
            },
            init: function(){
                this.$http.get('/api/about', {headers: window.myheaders})
                      .then(res => {
                          this.about = res.body[0];
                      });
                this.$http.get('/api/aboutlist', {headers: window.myheaders})
                          .then(res => {
                              this.about_list = res.body;
                          });
            }
        },
        mounted() {
            this.init();
        }
    }
</script>
