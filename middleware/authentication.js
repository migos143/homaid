const { createApp } = Vue;

createApp({
    data() {
        return {
            attendance: [],
            count: 1
        }
    },
    methods: {
        loginForm: function () {
            const vue = this;
            var data = new FormData();
            data.append("method", "login");
            data.append("username", document.getElementById('loginusername').value);
            data.append("password", document.getElementById('loginpassword').value);
            axios.post('backend/routes/authentication.php', data)
                .then(function (r) {
                    if (r.data == 1) {
                        window.location.href = "frontend/user/applicant/index.php";
                    } else if (r.data == 2) {
                        window.location.href = "frontend/user/homeowner/index.php";
                    } else if (r.data == 3) {
                        window.location.href = "frontend/admin/index.php";
                    } else {
                        alert('No Data Existed!');
                    }
                });
        },
        registerForm: function (id) {
            const vue = this;
            var data = new FormData();
            data.append("method", "register");
            data.append("Firstname", document.getElementById('homeownerFirstname').value);
            data.append("Lastname", document.getElementById('homeownerLastname').value);
            data.append("Username", document.getElementById('homeownerUsername').value);
            data.append("Password", document.getElementById('homeownerPassword').value);
            data.append("picture", document.getElementById('homeownerpicture').value);
            data.append("validId", document.getElementById('homeownervalidId').value);
            data.append("role", id);
            axios.post('backend/routes/authentication.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert('Successfully Registered!');
                    } else if (r.data == 400) {
                        alert("Something is wrong in registration!");
                    } else {
                        alert(r.data);
                    }
                });
        },
        applicantregisRerForm: function (id) {
            const vue = this;
            var data = new FormData();
            data.append("method", "register");
            data.append("Firstname", document.getElementById('applicantFirstname').value);
            data.append("Lastname", document.getElementById('applicantLastname').value);
            data.append("Username", document.getElementById('applicantUsername').value);
            data.append("Password", document.getElementById('applicantPassword').value);
            data.append("picture", document.getElementById('applicantpicture').value);
            data.append("validId", document.getElementById('applicantvalidId').value);
            data.append("role", id);
            axios.post('backend/routes/authentication.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert('Successfully Registered!');
                    } else if (r.data == 400) {
                        alert("Something is wrong in registration!");
                    } else {
                        alert(r.data);
                    }
                });
        },
    },
    created: function () {

    }
}).mount('#homeaid')