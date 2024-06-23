//fetch provides a javaScript interface for accessing and manipulating parts of the HTTP pipeline,
// such as requests and responses.
fetch("../recruit.json")

   //takes the response and reads it to completion.
  .then(response => response.json())//converting to json format

   // data is a variable
  .then(data => {
    let recruits = data.recruits
    //filter is a dictionary variable
    let filter = {} 
    let body = document.getElementById('body') //assign html element with id = 'body'
    

    //filter recruits by job category
    //first checks for a job category, if there are no category then it will input the current job category
    // and will enter the recruit details for that specific job category from recruit.json file

    for (let item of recruits) { //'let' is a keyword that is used to declare a blocked scoped variable.
        if(!filter[item.job]) {
            filter[item.job] = []
        }
        
        filter[item.job].push(item) //adds the item
    }
    //loop through categories in filter dictionary variable
    for (let category in filter) {
        
        let children = '' //assign empty string to children variable
        

        //adding each recruit detailed template to children variable
        for (let item of filter[category])
        {   

            children += `
                <div class="card">
                    <h2 class="title">${item.name}</h2>
                    <img class="image" src="${item.image}" alt="job seeker">
                    <p class="phone"> <span>Phone :</span>  ${item.phoneNumber}</p>
                    <p class="email"> <span>Email :</span>  ${item.email}</p>
                </div>
            ` 
        }
        
        //adding categorized template with recruit detailed children variable
        body.innerHTML += `
            <div class="box">
                <h2 class="category">${category}</h2>
                
                <div class="content">
                    ${children}
                </div>
            </div>
        `

    }

  });