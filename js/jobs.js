
//function is  a keyword
//function name is 'handleJobApply'
function handleJobApply(event, jobName) {
    event.preventDefault();

    window.sessionStorage.setItem('job-dices-job', jobName) // store job name
    let user = window.sessionStorage.getItem('job-dices-user') // get user if there is a user in session storage

    let href = window.location.href.split('/pages')
    //console.log(window.location.href)
    //console.log(window.location.href.split('/'))


    if(user) {
        window.location.assign(href[0] + '/pages/apply.html') // redirect to apply page
    }else{
        window.location.assign(href[0] + '/pages/login.html') // redirect to login page
    }
}

