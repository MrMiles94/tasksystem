function connect(data, location) {
    fetch(`http://localhost/projects/task%20system/tasksystem/src/api/${location}`, {
        method: 'POST',
        body: JSON.stringify(data),
    })
    .then(response => response.json(),)
    .then(data => {
        if(data.error){
            console.log(data);
        }else{
            console.log(data);
        };
        // Handle success (if needed)
    })
    .catch((error) => {
        console.error('Error:', error);
        // Handle errors (if needed)
    });
}
export default {connect};
