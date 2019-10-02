<script>
    export default{
        mounted(){
            console.log('program mounted')
        }
    }
    var user = @json($dataArray);
    axios.get('api/donator_search')
    new Vue({
        el:"#choosePlace";
        data:{
            district:''
        }
        data: function(){
            return {
                property_credentials: {
                    district: ''
                },
                districts: [{district: 'x', regions: [ 'a', 'b', 'c', 'd' ]}]
            }
        }
    });
</script>