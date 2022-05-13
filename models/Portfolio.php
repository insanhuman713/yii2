<?
    namespace app\models;
    use yii\db\ActiveRecord;
    
        class Portfolio extends ActiveRecord
        {
            public static function tableName()//метод который явно связывает таблицу с моделью
            {
                return 'portfolio'; //явно связали модель Portfolio с таблицей portfolio в базе данных
                                //название таблицы может быть абсолютно любой
            }

            public function getCategory(){//связываем данную модель с другой моделью(Category)
                //вот так связываем 2 эти модели, по 2-м свойствам.
                return $this->hasOne(Category::class,['id'=>'id_category']);
            }
        }
?>