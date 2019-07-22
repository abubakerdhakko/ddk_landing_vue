<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Team</li>
                </ol>

                <div class="card card-default">
                    <div class="card-header">Add New Team Member</div>
                    <div class="card-body">
                        <form class="row" v-on:submit.prevent="addlist()">
                            <div class="col-md-4"><input required class="form-control" placeholder="name" v-model="new_list.name" type="text"></div>
                            <div class="col-md-4"><input required class="form-control" placeholder="title" v-model="new_list.title" type="text"></div>
                            <div class="col-md-4">
                                <input required type="file" @change="imageChanged('add', $event)" >
                            </div>
                            <div class="col-md-4"><input required placeholder="Link" class="form-control" v-model="new_list.link" type="text" ></div>
                            <div class="col-md-4">
                                <select class="form-control" required v-model="new_list.category" @change="updatenewlistorder()">
                                    <option value=""> -- Select Team --</option>
                                    <option value="executive">Executive Team</option>
                                    <option value="developers">Developers Team</option>
                                    <option value="marketing">Marketing Team</option>
                                    <option value="support">Support Team</option>
                                    <option value="advisors">Advisor Team</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="number" min="0" required v-model="new_list.order">
                            </div>
                            <div class="col-md-12">
                                <textarea row="30" style="width: 100%; min-height:150px; " required v-model="new_list.description"> </textarea>
                            </div>

                            <div class="col-md-3"><button type="submit" class="btn btn-primary">Add</button></div>
                        </form>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">Executive Team List Section</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Link</th>
                                            <th>Description</th>
                                            <th align="right" style="text-align:right;min-width:200px;">Action</th>
                                        </tr>
                                    </thead>
                                        <transition-group tag="tbody" mode="out-in" name="slidefade">
                                            <tr v-for="item in team_list" :key="item.id" v-if="item.category==='executive'">
                                                <td>{{item.name}}</td>
                                                <td>{{item.title}}</td>
                                                <td><img :src="'/team/'+item.image" style="height:30px;border-radius:50%;width:30px"></td>
                                                <td>{{item.link}}</td>
                                                <td>{{item.description}}</td>
                                                <td align="right">
                                                    <button @click="editlist = item; editlist.image = '';" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#editmodal"><span class="fas fa-edit"></span></button>
                                                    <button @click="deletelist(item.id)" class="btn btn-xs btn-danger"><span class="fas fa-trash"></span></button>
                                                </td>
                                            </tr>
                                        </transition-group>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">Developers Team List Section</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Link</th>
                                        <th>Description</th>
                                        <th align="right" style="text-align:right;min-width:200px;">Action</th>
                                    </tr>
                                    </thead>
                                    <transition-group tag="tbody" mode="out-in" name="slidefade">
                                        <tr v-for="item in team_list" :key="item.id" v-if="item.category==='developers'">
                                            <td>{{item.name}}</td>
                                            <td>{{item.title}}</td>
                                            <td><img :src="'/team/'+item.image" style="height:30px;border-radius:50%;width:30px"></td>
                                            <td>{{item.link}}</td>
                                            <td>{{item.description}}</td>
                                            <td align="right">
                                                <button @click="editlist = item; editlist.image = '';" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#editmodal"><span class="fas fa-edit"></span></button>
                                                <button @click="deletelist(item.id)" class="btn btn-xs btn-danger"><span class="fas fa-trash"></span></button>
                                            </td>
                                        </tr>
                                    </transition-group>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">Blockchain &  Team List Section</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Link</th>
                                        <th>Description</th>
                                        <th align="right" style="text-align:right;min-width:200px;">Action</th>
                                    </tr>
                                    </thead>
                                    <transition-group tag="tbody" mode="out-in" name="slidefade">
                                        <tr v-for="item in team_list" :key="item.id" v-if="item.category==='marketing'">
                                            <td>{{item.name}}</td>
                                            <td>{{item.title}}</td>
                                            <td><img :src="'/team/'+item.image" style="height:30px;border-radius:50%;width:30px"></td>
                                            <td>{{item.link}}</td>
                                            <td>{{item.description}}</td>
                                            <td align="right">
                                                <button @click="editlist = item; editlist.image = '';" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#editmodal"><span class="fas fa-edit"></span></button>
                                                <button @click="deletelist(item.id)" class="btn btn-xs btn-danger"><span class="fas fa-trash"></span></button>
                                            </td>
                                        </tr>
                                    </transition-group>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">Support Team List Section</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Link</th>
                                        <th>Description</th>
                                        <th align="right" style="text-align:right;min-width:200px;">Action</th>
                                    </tr>
                                    </thead>
                                    <transition-group tag="tbody" mode="out-in" name="slidefade">
                                        <tr v-for="item in team_list" :key="item.id" v-if="item.category==='support'">
                                            <td>{{item.name}}</td>
                                            <td>{{item.title}}</td>
                                            <td><img :src="'/team/'+item.image" style="height:30px;border-radius:50%;width:30px"></td>
                                            <td>{{item.link}}</td>
                                            <td>{{item.description}}</td>
                                            <td align="right">
                                                <button @click="editlist = item; editlist.image = '';" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#editmodal"><span class="fas fa-edit"></span></button>
                                                <button @click="deletelist(item.id)" class="btn btn-xs btn-danger"><span class="fas fa-trash"></span></button>
                                            </td>
                                        </tr>
                                    </transition-group>
                                </table>
                            </div>
                        </div>

                        <hr>


                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">Advisors Team List Section</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Link</th>
                                        <th>Description</th>
                                        <th align="right" style="text-align:right;min-width:200px;">Action</th>
                                    </tr>
                                    </thead>
                                    <transition-group tag="tbody" mode="out-in" name="slidefade">
                                        <tr v-for="item in team_list" :key="item.id" v-if="item.category==='advisors'">
                                            <td>{{item.name}}</td>
                                            <td>{{item.title}}</td>
                                            <td><img :src="'/team/'+item.image" style="height:30px;border-radius:50%;width:30px"></td>
                                            <td>{{item.link}}</td>
                                            <td>{{item.description}}</td>
                                            <td align="right">
                                                <button @click="editlist = item; editlist.image = '';" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#editmodal"><span class="fas fa-edit"></span></button>
                                                <button @click="deletelist(item.id)" class="btn btn-xs btn-danger"><span class="fas fa-trash"></span></button>
                                            </td>
                                        </tr>
                                    </transition-group>
                                </table>
                            </div>
                        </div>
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
                        <div class="col-md-12"><input required class="form-control" placeholder="name" v-model="editlist.name" type="text"></div>
                        <div class="col-md-12"><input required class="form-control" placeholder="title" v-model="editlist.title" type="text"></div>
                        <div class="col-md-12">
                            <input required type="file" @change="imageChanged('edit', $event)" >
                        </div>
                        <div class="col-md-12"><input required placeholder="Link" class="form-control" v-model="editlist.link" type="text"></div>
                        <div class="col-md-12">
                            <select class="form-control" required v-model="editlist.category" style="margin-bottom:10px;">
                                <option value=""> -- Select Team --</option>
                                <option value="executive">Executive Team</option>
                                <option value="developers">Developers Team</option>
                                <option value="marketing">Blockchain & Marketing Team</option>
                                <option value="support">Support Team</option>
                                <option value="advisors">Advisor Team</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <textarea required v-model="editlist.description" style="margin-bottom:10px; min-height: 100px; width:100% ">
                            </textarea>
                        </div>


                        <div class="col-md-12">
                            <input class="form-control" type="number" min="0" required v-model="editlist.team_order">
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
                    name: '',
                    title: '',
                    image: '',
                    link: '',
                    category: '',
                    order: 1,
                    description: ''
                },
                team_list: [],
                editlist: {
                    id: 0,
                    name: '',
                    title: '',
                    image: '',
                    link: '',
                    category: '',
                    team_order: 0,
                    description: ''
                },
                orders: {

                }
            }
        },
        methods:{
            imageChanged: function(type, e){
                    var fileReader = new FileReader();

                    fileReader.readAsDataURL(e.target.files[0]);
                    fileReader.onload = (e) => {
                        if(type == 'add')
                            this.new_list.image = e.target.result;
                        else if(type == 'edit')
                            this.editlist.image = e.target.result;
                    }
            },
            updatenewlistorder: function(){
                this.new_list.order = this.orders[this.new_list.category];
            },
            updatelist: function(){
                this.$http.put('/api/team', JSON.stringify(this.editlist), {headers: window.myheaders})
                          .then(res => {
                                this.init();
                                $.Toast("success", "Team Member Successfully Updated.", "success", {});
                          });
            },
            deletelist: function(id){
                this.$http.post('/api/deleteteammember/', {id: id}, {headers: window.myheaders})
                          .then(res => {
                                var list = this.team_list.filter(ls => ls.id == id)[0];
                                this.team_list.splice(this.team_list.indexOf(list), 1);
                                $.Toast("success", "Team Member Successfully Deleted.", "success", {});
                          });
            },
            addlist: function(){
                this.orders[this.new_list.category] += 1;
                this.$http.post('/api/team', JSON.stringify(this.new_list), {headers: window.myheaders})
                          .then(res => {
                                this.init();
                                this.new_list.name = "";
                                this.new_list.title = "";
                                this.new_list.image = "";
                                this.new_list.link = "";
                                this.new_list.category = "";
                                this.new_list.order = 1;
                                this.new_list.description = "";

                                $.Toast("success", "Team Member Successfully Added.", "success", {});
                          });
            },
            init: function(){
                this.$http.get('/api/team', {headers: window.myheaders})
                          .then(res => {
                              this.team_list = res.body;
                          });
                this.update_orders();
            },
            update_orders: function(){
                this.$http.get('/api/teamorder', {headers: window.myheaders})
                    .then(res => {
                            this.orders = res.body[0];
                    });
            }
        },
        mounted() {
            this.init();
        }
    }
</script>
