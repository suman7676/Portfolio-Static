


































<script>
    projectList();

    async  function projectList(){
        let url="/projectData";
        document.getElementById('loader').classList.remove('d-none');
        document.getElementById('content').classList.add('d-none')
        let result=await axios.get(url);
        document.getElementById('loader').classList.add('d-none');
        document.getElementById('content').classList.remove('d-none');
        try {
            if(result.status==200){
                result.data.forEach((item)=>{
                    document.getElementById('').innerHTML+=(`

                   js variable declaration ${item['title']}



                   `)
                })
            }
        }
        catch (error){
            alert(error);
        }



    }





</script>
