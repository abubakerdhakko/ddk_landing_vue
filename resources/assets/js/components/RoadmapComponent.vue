<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Roadmap</li>
                </ol>
                <div class="card card-default">
                    <div class="card-header">Roadmap List Section</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Quarter</th>
                                            <th>Date</th>
                                            <th align="right" style="text-align:right;min-width:200px;">Action</th>
                                        </tr>
                                    </thead>
                                        <transition-group tag="tbody" mode="out-in" name="slidefade">
                                            <tr v-for="item in roadmap_list" :key="item.id">
                                                <td>{{item.description}}</td>
                                                <td><img :src="'/icons/'+item.icon" style="height:30px;border-radius:50%;"></td>
                                                <td>{{item.date.split("|")[0]}}</td>
                                                <td>{{item.date.split("|")[1]}}</td>
                                                <td align="right">
                                                    <button
                                                            @click="editlist = item; editlist.iconimg = ''; editlist.quarter = editlist.date.split('|')[0]; editlist.mydate = editlist.date.split('|')[1]" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#editmodal"><span class="fas fa-edit"></span></button>
                                                    <button @click="deletelist(item.id)" class="btn btn-xs btn-danger"><span class="fas fa-trash"></span></button>
                                                </td>
                                            </tr>
                                        </transition-group>
                                </table>
                            </div>
                        </div>

                        <hr>

                        <form class="row" v-on:submit.prevent="addlist()">
                            <div class="col-md-12" style="margin-bottom:10px;"><textarea required class="form-control" placeholder="description" v-model="new_list.description"></textarea></div>
                            <div class="col-md-3">
                                <select required class="form-control" v-model="new_list.quarter">
                                    <option value="">Select Quarter</option>
                                    <option v-for="i in [1,2,3,4]" :value="'Q'+i">Q{{i}}</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select required class="form-control" v-model="new_list.date" >
                                    <option value="">Select Year</option>
                                    <option v-for="i in array_range(2000, 2050)" :value="i">{{i}}</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input required type="file" @change="imageChanged('add', $event)" >
                            </div>
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
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <textarea class="form-control" placeholder="description" v-model="editlist.description" ></textarea><br>
                        </div>
                        <div class="col-md-12" style="margin-top:-20px;margin-bottom:10px;">
                            <select required class="form-control" v-model="editlist.quarter">
                                <option value="">Select Quarter</option>
                                <option v-for="i in [1,2,3,4]" :value="'Q'+i">Q{{i}}</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <select required class="form-control" v-model="editlist.mydate" style="margin-bottom:10px;">
                                <option value="">Select Year</option>
                                <option v-for="i in array_range(2000, 2050)" :value="i">{{i}}</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <input type="file" @change="imageChanged('edit', $event)" >
                        </div>
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
                    description: '',
                    quarter: '',
                    icon: '',
                    date: '',
                },
                roadmap_list: [],
                editlist: {
                    id: 0,
                    description: '',
                    icon: '',
                    date: '',
                    mydate: '',
                    quarter: ''
                }
            }
        },
        methods:{
            array_range: function(start, end){
                    var a = [];
                    for(var i = start; i <= end; i++){
                        a.push(i);
                    }
                    return a;
            },
            imageChanged: function(type, e){
                    var fileReader = new FileReader();

                    fileReader.readAsDataURL(e.target.files[0]);
                    fileReader.onload = (e) => {
                        if(type == 'add')
                            this.new_list.icon = e.target.result;
                        else if(type == 'edit')
                            this.editlist.iconimg = e.target.result;
                    }
            },
            updatelist: function(){
                var editlist = {
                    id: this.editlist.id,
                    description: this.editlist.description,
                    icon: this.editlist.icon,
                    date: this.editlist.quarter + "|"+ this.editlist.mydate
                };
                this.$http.put('/api/roadmap', JSON.stringify(editlist), {headers: window.myheaders})
                          .then(res => {
                                this.init();
                                $.Toast("success", "Roadmap Successfully Updated.", "success", {});
                          });
            },
            deletelist: function(id){
                this.$http.post('/api/deleteroadmaplist/', {id: id}, {headers: window.myheaders})
                          .then(res => {
                                var list = this.roadmap_list.filter(ls => ls.id == id)[0];
                                this.roadmap_list.splice(this.roadmap_list.indexOf(list), 1);
                                $.Toast("success", "Roadmap Successfully Deleted.", "success", {});
                          });
            },
            addlist: function(){
                var new_list = {
                    description: this.new_list.description,
                    icon: this.new_list.icon,
                    date: this.new_list.quarter + "|"+this.new_list.date
                };
                this.$http.post('/api/roadmap', JSON.stringify(new_list), {headers: window.myheaders})
                          .then(res => {
                                this.roadmap_list.push(res.body);
                                this.new_list.description = "";
                                this.new_list.icon = "";
                                this.new_list.date = "";
                                $.Toast("success", "Roadmap Successfully Added.", "success", {});
                          });
            },
            init: function(){
                this.$http.get('/api/roadmap', {headers: window.myheaders})
                          .then(res => {
                              this.roadmap_list = res.body;
                          });
            }
        },
        mounted() {
            this.init();
        }
    }
</script>
