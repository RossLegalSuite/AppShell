<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My Profile</div>

                    <div class="card-body">
                        <!-- <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="login">Login ID</label>
                                <input id="login" name="login" title="The user's LegalSuite login ID" :value="profile.id" class="form-control" type="text" readonly>
                           </div>
                        </div> -->

                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="name">Name</label>
                                <input id="name" name="name" title="The user's name" :value="profile.name" class="form-control" type="text" readonly>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="email">Email</label>
                                <input id="email" name="email" title="The user's email" :value="profile.email" class="form-control" type="text" readonly>
                            </div>
                        </div>
                        
                         <!-- <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="company-name">Company</label>
                                <input id="company-name" name="company-name" value="" class="form-control" type="text" readonly>
                                <span class="small">The User's company set in LegalSuite Online.</span>
                            </div>
                        </div> -->
    
                        <!-- <div class="form-group row">    
                            <div class="col-lg-6">
                                <security-groups :widget="{{ json_encode((object)$user)}}"></security-groups>
                                  @if($errors->has('dashboard_id')) <span class="invalid-feedback" role="alert"> <strong>{{ $errors->first('dashboard_id') }}</strong> </span> @endif
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {},
    data() {
        return {
            profile:[],
        };
    },
    mounted() {
        console.log("Hi");
        let uri = "/getProfile";

        axios
            .get(uri, {
                params: {
                    foo: "bar"
                }
            })
            .then(response => {
                this.profile = response.data;
            });
    console.log('this.profile',this.profile);
    }
    
};
</script>
