$(document).ready(function(){
    $('#add').click(function(){
        $newContent = `<br><br> <hr>

                         <input type="text" placeholder="Full Name" class="mt-5 pl-3" name="name[]">
                            <input type="text" placeholder="Track" class="mt-5 pl-3" name="track[]">
                            <input type="text" placeholder="Mobile Number" class="mt-5 pl-3" name="number[]">

                            <select class="mt-5 pl-3" name="network[]">
                                <option value="null">Select Airtime</option>
                                <option value="glo">GLO</option>
                                <option value="mtn">MTN</option>
                                <option value="airtel">AIRTEL</option>
                                <option value="9mobile">9MOBILE</option>
                            </select>`;


        $('#intern-details').append($newContent);
    });
});
