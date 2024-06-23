
let form = new FormData()
let user = window.sessionStorage.getItem('job-dices-user')

form.append('email', user)

if(user) {
    fetch("../php/profile.php", {
        method: "POST",
        body: form
    })
    .then(res => res.json())
    .then(data => {

        //assign details of the first user (first elemet of the array)
        let user = data[0]
        console.log('data:',data)
        console.log('user:',user)

        let fname = document.getElementById('fname')
        let lname = document.getElementById('lname')
        let pnumber = document.getElementById('pnumber')
        let country = document.getElementById('country')
        let city = document.getElementById('city')
        let email = document.getElementById('email')
        //console.log(fname)
        

        //assign values to inputs if exists
        //user['firstname'] = user.firstname
        
        if(user.firstname) fname.value = user.firstname
        if(user.lastname) lname.value = user.lastname
        if(user.mobile) pnumber.value = user.mobile
        if(user.city) city.value = user.city
        if(user.country) country.value = user.country
        if(user.email) email.value = user.email
        
        
    })
}

function updateProfile(e) {
    e.preventDefault()
    //e = event
    

    //get html form by id
    let htmlForm = document.getElementById("UpdateAccount-form")
    
    //assign html form to variable as an object
    let form = new FormData(htmlForm)

    fetch("../php/updateProfile.php", {
        method: "POST",
        body: form
    })
    .then(res => res.json())

    //state = boolen state of update function
    .then(state => {
        if(state) {
            alert("Updated Successfully")
        }else{
            alert("Update Failed")
        }
    })
}