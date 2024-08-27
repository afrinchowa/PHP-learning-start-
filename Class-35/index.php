
// alternative syntax

// if(condition){
// statement
// }else{
// statement
// }

<?php if(true) : ?>
    <h1>Hello1</h1>
    <?php elseif(true) : ?>
        <h1>Hello1</h1>
        <?php else:?>
            <h1>Hello1</h1>
            <?php endif; ?>


<?php  
switch(3):
case 1:
    echo "hello";
    break;
case 1:
    echo "hello2";
    break;
default:
    echo "bye";
    break;

endswitch;
?>

<?php for ($count =1; $count <=10; $count++) : ?>
<h1>Hello <?php echo $count ?></h1>
<?php endfor; ?>
