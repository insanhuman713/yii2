<?
    namespace app\controllers;

use app\models\Portfolio;
use app\models\Reviews;
use app\models\Category;
use yii\base\Controller;
use yii\data\Pagination;


    class IndexController extends Controller{

        public function actionIndex()
        {
            $category = Category::find()->all();
            $reviews = Reviews::find()->all();
                                            //методом find создаём объект запросов(из базы данных), 
                                           // а методом all выведем все элементы оъекта запроса.
                                           //limit() ограничивает количествовыводимых объектов

                                    // Работа с пагинацией       
             $query = Portfolio::find()->with('category');//with() позволяет жадно подгрузить данные из таблицы
             $pages = new Pagination(['totalCount' => $query->count(),'pageSize'=>6,
                                                                      'forcePageParam'=>false,
                                                                      'pageSizeParam'=>false]);
             $portfolio = $query->offset($pages->offset)
                        ->limit($pages->limit)
                        ->all();
            return $this->render('index', compact('reviews','portfolio','pages', 'category'));//в 'views/index.php' передаю
                                                                        // данные из объектов запроса
        }

    }
?>