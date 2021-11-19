<template>
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-wrapper">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="mb-0">ຟອມເພີ່ມຜູ້ໃຊ້ໃໝ່</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form @submit.prevent="Check_form_validation">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div
                                            class="
                                                row
                                                justify-content-center
                                                pt-6
                                                pb-6
                                            "
                                        >
                                            <div class="col-lg-3 order-lg-2">
                                                <div class="card-profile-image">
                                                    <a href="#">
                                                        <img
                                                            src="/argon/img/theme/team-4.jpg"
                                                            class="
                                                                rounded-circle
                                                            "
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label"
                                                >ຊື່ຜູ້ໃຊ້:
                                                <span class="text-red"
                                                    >*
                                                    <span v-if="msg.name">
                                                        {{ msg.name }}
                                                    </span></span
                                                ></label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="name"
                                                ref="focusMe"
                                                v-model="user.name"
                                            />
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label"
                                                >ນາມສະກຸນ:</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                v-model="user.last_name"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                >ເພດ:
                                                <span class="text-red"
                                                    >*
                                                    <span v-if="msg.sex">
                                                        {{ msg.sex }}
                                                    </span></span
                                                ></label
                                            >
                                            <select
                                                name=""
                                                class="form-control"
                                                v-on:change="
                                                    onChangeSex($event)
                                                "
                                            >
                                                <option value="">
                                                    -- ເລືອກ --
                                                </option>
                                                <option value="m">ຊາຍ</option>
                                                <option value="f">ຍິງ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                >User Nmae:
                                                <span class="text-red"
                                                    >*
                                                    <span v-if="msg.user_name">
                                                        {{ msg.user_name }}
                                                    </span></span
                                                ></label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                v-model="user.user_name"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                >Email address:
                                                <span class="text-red"
                                                    >*
                                                    <span v-if="msg.email">
                                                        {{ msg.email }}
                                                    </span></span
                                                ></label
                                            >
                                            <input
                                                type="email"
                                                class="form-control"
                                                v-model="user.email"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                >ລະຫັດຜ່ານ:
                                                <span class="text-red"
                                                    >*
                                                    <span v-if="msg.pass">
                                                        {{ msg.pass }}
                                                    </span></span
                                                ></label
                                            >
                                            <input
                                                type="password"
                                                class="form-control"
                                                v-model="user.password"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                >ຢືນຢັນ ລະຫັດຜ່ານ:
                                                <span class="text-red"
                                                    >*
                                                    <span v-if="msg.pass2">
                                                        {{ msg.pass2 }}
                                                    </span></span
                                                ></label
                                            >
                                            <input
                                                type="password"
                                                class="form-control"
                                                v-model="user.password2"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                >ເບີໂທ:</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                v-model="user.tel"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                >ປະເພດຜູ້ໃຊ້:
                                                <span class="text-red"
                                                    >*
                                                    <span v-if="msg.user_type">
                                                        {{ msg.user_type }}
                                                    </span></span
                                                ></label
                                            >
                                            <select
                                                name=""
                                                class="form-control"
                                                v-on:change="
                                                    onChangeUserType($event)
                                                "
                                            >
                                                <option value="">
                                                    -- ເລືອກ --
                                                </option>
                                                <option value="admin">
                                                    admin
                                                </option>
                                                <option value="user">
                                                    user
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                >ສິດຜູ້ໃຊ້:
                                                <span class="text-red"
                                                    >*
                                                    <span v-if="msg.permiss">
                                                        {{ msg.permiss }}
                                                    </span></span
                                                ></label
                                            >
                                            <select
                                                name=""
                                                class="form-control"
                                                v-on:change="
                                                    onChangePermiss($event)
                                                "
                                            >
                                                <option value="">
                                                    -- ເລືອກປະເພດ --
                                                </option>
                                                <option value="administrator">
                                                    administrator
                                                </option>
                                                <option value="super_user">
                                                    super user
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                >ວັນທີ່ເລີ່ມວຽກ:</label
                                            >
                                            <input
                                                class="form-control"
                                                type="date"
                                                pattern="\d{1,2}/\m{1,2}/\y{4}"
                                                v-model="user.date_start"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                >ສະຖານະ:
                                                <span class="text-red"
                                                    >*
                                                    <span v-if="msg.status">
                                                        {{ msg.status }}
                                                    </span></span
                                                ></label
                                            >
                                            <select
                                                name=""
                                                class="form-control"
                                                v-on:change="
                                                    onChangStatus($event)
                                                "
                                            >
                                                <option value="">
                                                    -- ສະຖານະ --
                                                </option>
                                                <option value="Active">
                                                    Active
                                                </option>
                                                <option value="Deactive">
                                                    Deactive
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{ user }}
                                </div>
                                <div class="row justify-content-end pr-4">
                                    <button type="submit" class="btn btn-info">
                                        ບັນທຶກຂໍ້ມູນ
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                        @click="$router.go(-1)"
                                    >
                                        ຍົກເລີກ
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "add_user",

    components: {},

    directives: {},

    data() {
        return {
            valid: false,
            msg: [],
            user: {
                name: "",
                last_name: "",
                sex: "",
                user_name: "",
                email: "",
                password: "",
                password2: "",
                tel: "",
                user_type: "",
                type: "admin",
                permission: "",
                date_start: "",
                status: "",
            },
        };
    },

    mounted() {
        this.$refs.focusMe.focus();
        // console.log(window.location.origin)
    },

    methods: {
        onChangeSex: function (e) {
            var id = e.target.value;
            var name = e.target.options[e.target.options.selectedIndex].text;
            this.user.sex = id;
            //  this.Check_form_validation(e);
        },
        onChangeUserType: function (e) {
            var id = e.target.value;
            var name = e.target.options[e.target.options.selectedIndex].text;
            this.user.user_type = id;
        },
        onChangePermiss: function (e) {
            var id = e.target.value;
            var name = e.target.options[e.target.options.selectedIndex].text;
            this.user.permission = id;
            // this.Check_form_validation(e);
        },

        onChangStatus: function (e) {
            var id = e.target.value;
            var name = e.target.options[e.target.options.selectedIndex].text;
            this.user.status = id;
            // this.Check_form_validation(e);
        },
        Check_form_validation: function (event) {
            this.msg = [];
            var a = 0,
                b = 0,
                c = 0,
                d = 0,
                e = 0,
                f = 0,
                g = 0,
                h = 0,
                i = 0,
                all;
            if (!this.user.name) {
                this.msg.name = "ບໍ່ໃຫ້ເປັນຄ່າຫວ່າງ";
                a = 0;
            } else {
                this.msg.name = null;
                a = 1;
            }
            if (!this.user.sex) {
                this.msg.sex = "ບໍ່ໃຫ້ເປັນຄ່າຫວ່າງ";
                b = 0;
            } else {
                this.msg.sex = null;
                b = 1;
            }
            if (!this.user.user_name) {
                this.msg.user_name = "ບໍ່ໃຫ້ເປັນຄ່າຫວ່າງ";
                c = 0;
            } else {
                this.msg.user_name = null;
                c = 1;
            }
            if (!this.user.email) {
                this.msg.email = "ບໍ່ໃຫ້ເປັນຄ່າຫວ່າງ";
                d = 0;
            } else {
                this.msg.email = null;
                d = 1;
            }
            if (!this.user.password && !this.user.password2) {
                this.msg.pass = "ບໍ່ໃຫ້ເປັນຄ່າຫວ່າງ";
                this.msg.pass2 = "ບໍ່ໃຫ້ເປັນຄ່າຫວ່າງ";
            } else {
                if (this.user.password.length < 6) {
                    this.msg.pass = "ລະຫັດຕ້ອງບໍ່ຕ່ຳກ່ວາ 6 ຕົວອັກສອນ";
                    e = 0;
                } else {
                    this.msg.pass = null;
                    e = 1;
                    if (!this.user.password2) {
                        this.msg.pass2 = "ບໍ່ໃຫ້ເປັນຄ່າຫວ່າງ";
                        f = 0;
                    } else {
                        this.msg.pass2 = null;
                        if (this.user.password2 == this.user.password) {
                            this.msg.pass2 = null;
                            f = 1;
                        } else {
                            this.msg.pass2 = "ລະຫັດບໍ່ຕົງກັນ";
                            f = 0;
                        }
                    }
                }
            }

            if (!this.user.user_type) {
                this.msg.user_type = "ບໍ່ໃຫ້ເປັນຄ່າຫວ່າງ";
                g = 0;
            } else {
                this.msg.user_type = null;
                g = 1;
            }
            if (!this.user.permission) {
                this.msg.permiss = "ບໍ່ໃຫ້ເປັນຄ່າຫວ່າງ";
                h = 0;
            } else {
                this.msg.permiss = null;
                h = 1;
            }
            if (!this.user.status) {
                this.msg.status = "ບໍ່ໃຫ້ເປັນຄ່າຫວ່າງ";
                i = 0;
            } else {
                this.msg.status = null;
                i = 1;
            }
            all = a + b + c + d + e + f + g + h + i;

            if (all == 9) {
                this.createUser();
            }
        },
        createUser() {
            this.$Progress.start();
            this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                axios
                    .post("/api/users/add", {
                        name: this.user.name,
                        last_name: this.user.last_name,
                        sex: this.user.sex,
                        user_name: this.user.user_name,
                        email: this.user.email,
                        password: this.user.password,
                        tel: this.user.tel,
                        user_type: this.user.user_type,
                        permission: this.user.permission,
                        date_start: this.user.date_start,
                        status: this.user.status,
                    })
                    .then((response) => {
                        if (response.data.success) {
                            this.$Progress.finish();
                            // console.log('Ok')
                            this.$router.push("/users");
                        } else {
                            this.error = response.data.message;
                            console.error(error);
                        }
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            });
        },
    },
    created() {
        this.$Progress.start();
        // this.loadCategories();

        this.$Progress.finish();
    },
};
</script>

<style lang="scss" scoped></style>
