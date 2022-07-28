<?php

class Player
{
    protected static $identity = 'Player';

    public static function identity_test()
    {
        echo 'identity: ' . self::$identity . "<br />";

        echo 'get_class: ' . get_class() . "<br />";
        echo 'get_called_class: ' . get_called_class() . "<br />";
    }

}

class TennisPlayer extends Player
{
    protected static $identity = 'Tennis Player';
}

Player::identity_test();
echo "<br />";
TennisPlayer::identity_test();

?>