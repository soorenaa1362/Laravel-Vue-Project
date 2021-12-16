<template>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary d-flex justify-content-between">
                <h4 class="card-title pt-2">لیست کاربران سایت</h4>
                <router-link :to="{ name: 'admin-users', params: {url: 'create'} }" class="btn btn-info"> 
                    <i class="fa fa-user-plus"></i>
                    کاربر جدید
                </router-link>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                        <tr>
                            <th>#</th> 
                            <th>نام</th>
                            <th>ایمیل</th>
                            <th>نوع حساب کاربری</th>
                            <th>تاریخ ساخت حساب</th>
                        </tr>
                        </thead>
                        <tbody class="text-primary">
                            <tr v-for="user in users" :key="user.id">
                                <td>{{ user.id }}</td>
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.type }}</td>
                                <td>{{ user.created_at }}</td>
                                <td>
                                    <button class="btn btn-info btn-sm">ویرایش</button>
                                    <button class="btn btn-danger btn-sm">حذف</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Index",

        metaInfo: {
            title: 'لیست کاربران'
        }, 

        data(){
            return {
                users: {}
            }
        },

        created(){
            axios.get('/api/admin/users')
                .then(({data}) => {
                    this.users = data.data
                })
        }

    }
</script>

<style scoped>

</style>
