<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row card-header">
                        <div class="col-6">
                            <h3 class="mb-0">ລາຍການຜູ້ໃຊ້</h3>
                        </div>
                        <div class="col-6 text-right">
                            <router-link to="/users/add">
                                <a
                                    class="
                                        btn
                                        btn-sm
                                        btn-neutral
                                        btn-round
                                        btn-icon
                                    "
                                >
                                    <span class="btn-inner--icon"
                                        ><i class="fas fa-plus"></i
                                    ></span>
                                    <span class="btn-inner--text"
                                        >ເພີ່ມຜູ້ໃຊ້</span
                                    >
                                </a></router-link
                            >
                        </div>
                    </div>
                </div>
                <!-- Light table -->

                <div class="table-responsive p-4">
                    <table
                        class="table align-items-center table-flush"
                        id="data_user_table2"
                    >
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>ຊື່ຜູ້ໃຊ້</th>
                                <th>ຕິດຕໍ່</th>
                                <th>ສະຖານະ</th>
                                <th>ຈັດການ</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                    <hr />

                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>ຊື່ຜູ້ໃຊ້</th>
                                <th>ຕິດຕໍ່</th>
                                <th>ສະຖານະ</th>
                                <th>ຈັດການ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="user in users.data" :key="user.id">
                                <th>{{ user.id }}</th>
                                <td class="table-user">
                                    <img
                                        src="argon/img/theme/team-1.jpg"
                                        class="avatar rounded-circle mr-3"
                                    />
                                    <b>{{ user.name }} {{ user.last_name }}</b>
                                </td>
                                <td>
                                    <span class="text-muted"
                                        >ເບີໂທ: 020 29113568 <br />
                                        ອີເມວລ໌: sonexaymail@gmail.com</span
                                    >
                                </td>
                                <td>
                                    <span class="text-muted"
                                        >ການນຳໃຊ້: Active <br />
                                        ປະເພດຜູ້ໃຊ້: Admin</span
                                    >
                                </td>
                                <td class="table-actions">
                                    <a
                                        href="#!"
                                        class="table-action"
                                        data-toggle="tooltip"
                                        data-original-title="Edit product"
                                    >
                                        <i class="fas fa-user-edit"></i>
                                    </a>
                                    <a
                                        href="#!"
                                        class="table-action table-action-delete"
                                        data-toggle="tooltip"
                                        data-original-title="Delete product"
                                    >
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                  <vuePagination
                  :pagination="users"
                  @paginate="getUsers()"
                  :offset="4"
                  ></vuePagination>
                  
                </div>
            </div>

            <!-- /.card -->
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            editmode: false,
            users: [],
            current: 1,
            pageSize: 4,
        };
    },
    comments: {
        // VueJsDatatable
    },
    methods: {
      
        edit_user(id) {
            console.log(id);
        },

        getUsers() {
            this.$Progress.start();
            this.$axios.get("/sanctum/csrf-cookie").then((response) => {
            axios.get(`/api/users?page=${this.users.current_page}`)
                .then((response) => {
                    this.users = response.data;
                    this.$Progress.finish();
                })
                .catch(() => {
                    console.error(error);
                });
            });
        }
    },
    mounted() {
        console.log("User Component mounted.");
    },
    created() {


            this.$Progress.start();
            this.getUsers()
            this.$Progress.finish();
       /*
        this.$Progress.start();
        this.$axios.get("/sanctum/csrf-cookie").then((response) => {
            this.$axios
                .get("/api/users")
                .then((response) => {
                    this.users = response.data;
                    this.$Progress.finish();

                })
                .catch(function (error) {
                    console.error(error);
                });
        });
     */
        
        
    },
};
</script>
