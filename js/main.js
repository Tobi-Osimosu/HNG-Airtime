$(document).ready(function(){
    $('#add').click(function(){
        $newContent = `<br><br> <hr>

    <input type="text" placeholder="Full Name" class="mt-5 pl-3" name="name[]">
    <input type="text" placeholder="Track" class="mt-5 pl-3" name="track[]">
    <input type="text" placeholder="Mobile Number" class="mt-5 pl-3" name="number[]">
    <input type="text" placeholder="Network" class="mt-5 pl-3" name="network[]">`;


        $('#intern-details').append($newContent);
    });
});
