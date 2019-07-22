<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Token Sale</li>
                </ol>
                <div class="card card-default">
                    <div class="card-header">Token Sale List Section</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Amount</th>
                                            <th align="right" style="text-align:right;min-width:200px;">Action</th>
                                        </tr>
                                    </thead>
                                        <transition-group tag="tbody" mode="out-in" name="slidefade">
                                            <tr v-for="item in tokensale_list" :key="item.id">
                                                <td>{{item.title}}</td>
                                                <td>{{item.amount}}</td>
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
                            <div class="col-md-3"><input required class="form-control" placeholder="title" v-model="new_list.title" type="text"></div>
                            <div class="col-md-3"><input required class="form-control" placeholder="amount" v-model="new_list.amount" type="text"></div>
                            <div class="col-md-3"><button type="submit" class="btn btn-primary">Add</button></div>
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
                        <input class="form-control" type="text" v-model="editlist.title">
                        <input class="form-control" type="text" v-model="editlist.amount">
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
                new_list: {
                    title: '',
                    amount: '',
                    percentage: '10'
                },
                tokensale_list: [],
                editlist: {
                    id: 0,
                    title: '',
                    amount: '',
                    percentage: ''
                }
            }
        },
        methods:{
            updatelist: function(){
                this.$http.put('/api/tokensalelist', JSON.stringify(this.editlist), {headers: window.myheaders})
                          .then(res => {
                                $.Toast("success", "tokensale List Item Successfully Added.", "success", {});
                          });
            },
            deletelist: function(id){
                this.$http.post('/api/deletetokensalelist/', {id: id}, {headers: window.myheaders})
                          .then(res => {
                                var list = this.tokensale_list.filter(ls => ls.id == id)[0];
                                this.tokensale_list.splice(this.tokensale_list.indexOf(list), 1);
                                $.Toast("success", "tokensale List Item Successfully Deleted.", "success", {});
                          });
            },
            addlist: function(){
                this.$http.post('/api/tokensalelist', JSON.stringify(this.new_list), {headers: window.myheaders})
                          .then(res => {
                                this.tokensale_list.push(res.body);
                                this.new_list.title = "";
                                this.new_list.amount = "";
                                this.new_list.percentage = "10";
                                $.Toast("success", "tokensale List Item Successfully Added.", "success", {});
                          });
            },
            init: function(){
                this.$http.get('/api/tokensalelist', {headers: window.myheaders})
                          .then(res => {
                              this.tokensale_list = res.body;
                          });
            }
        },
        mounted() {
            this.init();
        }
    }
</script>
