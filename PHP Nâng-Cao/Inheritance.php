    <?php
    class Pet {
        public $name;

        // Hàm khởi tạo thiết lập tên cho vật nuôi
        function __construct($pet_name) {
            $this->name = $pet_name;
        }
        // Vật nuôi có thể ăn
        function eat() {
            echo "<p>$this->name đang ăn.</p>";
        }
        // Vật nuôi có thể ngủ
        function sleep() {
            echo "<p>$this->name đang ngủ.</p>";
        }
    } // End of Pet class.

    /* Class Mèo kế thừa class Vật nuôi
     * Mèo có thêm phương thức: climb().
     */
    class Cat extends Pet {
        // Mèo có thể trèo tường
        function climb() {
            echo "<p>$this->name đang trèo tường.</p>";
        }
    } // End of Cat class.

    /* Class chó kế thừa class Vật nuôi
     * Chó có thêm phương thức: fetch().
     */
    class Dog extends Pet {
        // Chó có thể lấy đồ vật về.
        function fetch() {
            echo "<p>$this->name đang lấy đồ vật cho chủ.</p>";
        }
    } // End of Dog class.


    // Tạo một con chó tên Jonh
    $dog = new Dog('Jonh');

    // Tạo một con mèo tên Mina
    $cat = new Cat('Mina');

    // Cho hai con này ăn
    $dog->eat();
    $cat->eat();

    // Cho hai con vật này ngủ
    $dog->sleep();
    $cat->sleep();

    // Chó thì bắt lấy đồ vật còn mèo bắt trèo tường
    $dog->fetch();
    $cat->climb();

    // Xóa đối tượng khi không dùng đến
    unset($dog, $cat);
    ?>