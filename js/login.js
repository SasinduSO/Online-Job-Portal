function handleOnLogin(e) {
    //e = event
    //stop the default action (automatically submitting on submit button click)
    e.preventDefault();
    //get the form details from html
    let form = new FormData(document.getElementById('login-form'));
    let email = document.getElementById('login-email');

    //do a fetch request to send and retreive data from .php file
    fetch("../php/login.php", {
        method: 'POST',
        body: form
    })
        .then(res => res.json()) // get the result then convert to .json format
        .then(loggedIn => {

            if(loggedIn) {
                window.sessionStorage.setItem('job-dices-user', email.value) // store in browser session storage
                
                //alert
                alert(`Logged in as ${email.value}`)

                let jobName = window.sessionStorage.getItem('job-dices-job') // get job name if there is
                
                let href = window.location.href.split('/pages')
            

                if(jobName) {
                    window.location.assign(href[0] + '/pages/apply.html')
                }else{
                    window.location.assign(href[0] + '/pages/index.html')
                }
                
            }
            else {
                  //alert
                  alert(`Login failed`)
            }
        })
        //for error handling
        .catch(err => {
            console.log('error', err)
        })
}