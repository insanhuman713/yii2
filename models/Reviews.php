<?
//модели нужны для работы с базами данных
//в данном случае эта модель-Index, нужна для
//вывода данных на главной странице
namespace app\models;
use yii\db\ActiveRecord;

    class Reviews extends ActiveRecord
    {
        public static function tableName()//метод который явно связывает таблицу с моделью
        {
            return 'reviews'; //явно связали модель Reviews с таблицей reviews в базе данных
                            //название таблицы может быть абсолютно любой
        }
    }
?>