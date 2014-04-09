<?php
namespace Model;
class Article extends \Library\Model
{
    /**
     * @var int Article id.
     */
    private $id;

    /**
     * @var string Article title.
     */
    private $title;

    /**
     * @var string Article short description.
     */
    private $shortDescription;

    /**
     * @var string Article text.
     */
    private $text;

    /**
     * @var string Article creation date.
     */
    private $createdAt;

    /**
     * @var array Dummy articles data(Will be replaced with Database data soon)
     */
    private static $data = array(
        array(
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque arcu mauris, pharetra ut fringilla in, lobortis ac est. Maecenas sed turpis et sem iaculis pellentesque ac eget nisi. Maecenas massa purus, gravida sed tempus sed, vehicula eget sem. Fusce a urna sit amet dui varius malesuada. Nunc fermentum pharetra leo in fermentum. Suspendisse porttitor mi at nunc fermentum laoreet. Vestibulum ante erat, egestas ac tincidunt a, molestie sit amet ipsum.
                Duis at velit ac lorem rhoncus iaculis. Proin a purus dolor. Suspendisse id odio eu lacus laoreet tincidunt. Aliquam at enim sit amet erat fringilla viverra lobortis eget neque. Nunc placerat ipsum sed urna convallis et mollis lorem condimentum. Pellentesque cursus est dapibus dui sagittis nec pharetra nibh ultricies. Quisque rhoncus molestie neque sit amet bibendum. Morbi adipiscing, augue eget luctus semper, sem tellus tempor ipsum, in feugiat quam velit ac magna.
                Integer suscipit, sapien id laoreet congue, mauris neque tempor dolor, eget lacinia lacus justo nec felis....',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque arcu mauris, pharetra ut fringilla in, lobortis ac est. Maecenas sed turpis et sem iaculis pellentesque ac eget nisi. Maecenas massa purus, gravida sed tempus sed, vehicula eget sem. Fusce a urna sit amet dui varius malesuada. Nunc fermentum pharetra leo in fermentum. Suspendisse porttitor mi at nunc fermentum laoreet. Vestibulum ante erat, egestas ac tincidunt a, molestie sit amet ipsum. Duis at velit ac lorem rhoncus iaculis. Proin a purus dolor. Suspendisse id odio eu lacus laoreet tincidunt. Aliquam at enim sit amet erat fringilla viverra lobortis eget neque. Nunc placerat ipsum sed urna convallis et mollis lorem condimentum. Pellentesque cursus est dapibus dui sagittis nec pharetra nibh ultricies. Quisque rhoncus molestie neque sit amet bibendum. Morbi adipiscing, augue eget luctus semper, sem tellus tempor ipsum, in feugiat quam velit ac magna. Integer suscipit, sapien id laoreet congue, mauris neque tempor dolor, eget lacinia lacus justo nec felis.
                Nam volutpat, eros sit amet ullamcorper egestas, nisi tortor ultrices turpis, sit amet rhoncus libero quam pharetra ligula. Proin id mauris nunc, ac laoreet lectus. Aenean nisl est, ultrices id mattis eu, lacinia vel velit. Sed gravida consectetur elit, sed placerat metus pulvinar et. Sed auctor lectus nec orci laoreet viverra. In eget libero eu nisl sagittis tempus. Duis pulvinar dolor in elit gravida convallis. Nulla a lacus magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus ante tortor, consequat facilisis ultricies vel, molestie eget quam. Aenean imperdiet, sem a aliquam dictum, magna risus euismod lacus, sed ultricies sapien neque ut lorem. Donec sapien est, ullamcorper non tristique sit amet, vulputate id erat. Etiam ligula orci, semper a placerat vel, adipiscing ac neque. Ut neque nunc, luctus ac facilisis vitae, dictum ac augue. Nulla adipiscing ligula non erat tincidunt in ultricies purus molestie.
                Sed aliquam convallis nunc dictum ornare. In mollis aliquet tellus eget cursus. Praesent ante nisi, porttitor ut pellentesque ut, porta non mi. Fusce lorem nibh, consectetur eget facilisis nec, volutpat vitae mauris. Vestibulum et nunc turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vestibulum augue non mi vehicula dictum. Vivamus eget turpis tincidunt nunc commodo porttitor. Nunc sodales adipiscing ante, nec sollicitudin metus feugiat a. Morbi blandit leo sem. Sed dictum vehicula dui id eleifend. Donec quis fermentum magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nulla sed condimentum orci. Etiam magna metus, iaculis vitae euismod vitae, volutpat vel nunc. Sed varius, diam et laoreet hendrerit, justo nisl posuere odio, sit amet semper libero neque porta augue. Maecenas quis enim est, ut ultricies quam. Sed et eros dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque at cursus turpis.
                Cras tortor magna, vehicula eget scelerisque id, interdum et ante. Cras gravida magna urna, sit amet molestie sapien. Etiam at sapien ut nunc ultrices dapibus hendrerit non sapien. Praesent vel eros felis, a lacinia dolor. Praesent volutpat sollicitudin sapien, ut pellentesque lacus luctus sit amet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas id lectus vel risus facilisis mattis. Morbi urna lectus, ultricies ut fermentum sit amet, eleifend vitae nibh. Nunc ultricies malesuada odio, sit amet adipiscing mi fermentum at. Vestibulum mi purus, bibendum sit amet congue vitae, mollis imperdiet lectus. Nullam sit amet semper neque. Etiam diam sapien, dignissim ac vehicula sit amet, feugiat a sapien. Cras aliquet vulputate erat. Curabitur sed libero vitae lacus laoreet gravida vitae vitae tortor. Nulla facilisi.',
            'created_at' => ''
        ),
        array(
            'id' => 2,
            'title' => 'Nam volutpat, eros sit amet ullamcorper egestas',
            'short_description' => 'Nam volutpat, eros sit amet ullamcorper egestas, nisi tortor ultrices turpis, sit amet rhoncus libero quam pharetra ligula. Proin id mauris nunc, ac laoreet lectus. Aenean nisl est, ultrices id mattis eu, lacinia vel velit. Sed gravida consectetur elit, sed placerat metus pulvinar et. Sed auctor lectus nec orci laoreet viverra. In eget libero eu nisl sagittis tempus. Duis pulvinar dolor in elit gravida convallis. Nulla a lacus magna.
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus ante tortor, consequat facilisis ultricies vel, molestie eget quam. Aenean imperdiet, sem a aliquam dictum, magna risus euismod lacus, sed ultricies sapien neque ut lorem. Donec sapien est, ullamcorper non tristique sit amet, vulputate id erat. Etiam ligula orci, semper a placerat vel, adipiscing ac neque. Ut neque nunc, luctus ac facilisis vitae, dictum ac augue.
                Nulla adipiscing ligula non erat tincidunt in ultricies purus molestie.',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque arcu mauris, pharetra ut fringilla in, lobortis ac est. Maecenas sed turpis et sem iaculis pellentesque ac eget nisi. Maecenas massa purus, gravida sed tempus sed, vehicula eget sem. Fusce a urna sit amet dui varius malesuada. Nunc fermentum pharetra leo in fermentum. Suspendisse porttitor mi at nunc fermentum laoreet. Vestibulum ante erat, egestas ac tincidunt a, molestie sit amet ipsum. Duis at velit ac lorem rhoncus iaculis. Proin a purus dolor. Suspendisse id odio eu lacus laoreet tincidunt. Aliquam at enim sit amet erat fringilla viverra lobortis eget neque. Nunc placerat ipsum sed urna convallis et mollis lorem condimentum. Pellentesque cursus est dapibus dui sagittis nec pharetra nibh ultricies. Quisque rhoncus molestie neque sit amet bibendum. Morbi adipiscing, augue eget luctus semper, sem tellus tempor ipsum, in feugiat quam velit ac magna. Integer suscipit, sapien id laoreet congue, mauris neque tempor dolor, eget lacinia lacus justo nec felis.
                Nam volutpat, eros sit amet ullamcorper egestas, nisi tortor ultrices turpis, sit amet rhoncus libero quam pharetra ligula. Proin id mauris nunc, ac laoreet lectus. Aenean nisl est, ultrices id mattis eu, lacinia vel velit. Sed gravida consectetur elit, sed placerat metus pulvinar et. Sed auctor lectus nec orci laoreet viverra. In eget libero eu nisl sagittis tempus. Duis pulvinar dolor in elit gravida convallis. Nulla a lacus magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus ante tortor, consequat facilisis ultricies vel, molestie eget quam. Aenean imperdiet, sem a aliquam dictum, magna risus euismod lacus, sed ultricies sapien neque ut lorem. Donec sapien est, ullamcorper non tristique sit amet, vulputate id erat. Etiam ligula orci, semper a placerat vel, adipiscing ac neque. Ut neque nunc, luctus ac facilisis vitae, dictum ac augue. Nulla adipiscing ligula non erat tincidunt in ultricies purus molestie.
                Sed aliquam convallis nunc dictum ornare. In mollis aliquet tellus eget cursus. Praesent ante nisi, porttitor ut pellentesque ut, porta non mi. Fusce lorem nibh, consectetur eget facilisis nec, volutpat vitae mauris. Vestibulum et nunc turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vestibulum augue non mi vehicula dictum. Vivamus eget turpis tincidunt nunc commodo porttitor. Nunc sodales adipiscing ante, nec sollicitudin metus feugiat a. Morbi blandit leo sem. Sed dictum vehicula dui id eleifend. Donec quis fermentum magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nulla sed condimentum orci. Etiam magna metus, iaculis vitae euismod vitae, volutpat vel nunc. Sed varius, diam et laoreet hendrerit, justo nisl posuere odio, sit amet semper libero neque porta augue. Maecenas quis enim est, ut ultricies quam. Sed et eros dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque at cursus turpis.
                Cras tortor magna, vehicula eget scelerisque id, interdum et ante. Cras gravida magna urna, sit amet molestie sapien. Etiam at sapien ut nunc ultrices dapibus hendrerit non sapien. Praesent vel eros felis, a lacinia dolor. Praesent volutpat sollicitudin sapien, ut pellentesque lacus luctus sit amet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas id lectus vel risus facilisis mattis. Morbi urna lectus, ultricies ut fermentum sit amet, eleifend vitae nibh. Nunc ultricies malesuada odio, sit amet adipiscing mi fermentum at. Vestibulum mi purus, bibendum sit amet congue vitae, mollis imperdiet lectus. Nullam sit amet semper neque. Etiam diam sapien, dignissim ac vehicula sit amet, feugiat a sapien. Cras aliquet vulputate erat. Curabitur sed libero vitae lacus laoreet gravida vitae vitae tortor. Nulla facilisi.',
            'created_at' => ''
        ),
        array(
            'id' => 3,
            'title' => 'Sed aliquam convallis nunc dictum ornare',
            'short_description' => 'Sed aliquam convallis nunc dictum ornare. In mollis aliquet tellus eget cursus. Praesent ante nisi, porttitor ut pellentesque ut, porta non mi. Fusce lorem nibh, consectetur eget facilisis nec, volutpat vitae mauris. Vestibulum et nunc turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vestibulum augue non mi vehicula dictum. Vivamus eget turpis tincidunt nunc commodo porttitor. Nunc sodales adipiscing ante, nec sollicitudin metus feugiat a. Morbi blandit leo sem. Sed dictum vehicula dui id eleifend. Donec quis fermentum magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque arcu mauris, pharetra ut fringilla in, lobortis ac est. Maecenas sed turpis et sem iaculis pellentesque ac eget nisi. Maecenas massa purus, gravida sed tempus sed, vehicula eget sem. Fusce a urna sit amet dui varius malesuada. Nunc fermentum pharetra leo in fermentum. Suspendisse porttitor mi at nunc fermentum laoreet. Vestibulum ante erat, egestas ac tincidunt a, molestie sit amet ipsum. Duis at velit ac lorem rhoncus iaculis. Proin a purus dolor. Suspendisse id odio eu lacus laoreet tincidunt. Aliquam at enim sit amet erat fringilla viverra lobortis eget neque. Nunc placerat ipsum sed urna convallis et mollis lorem condimentum. Pellentesque cursus est dapibus dui sagittis nec pharetra nibh ultricies. Quisque rhoncus molestie neque sit amet bibendum. Morbi adipiscing, augue eget luctus semper, sem tellus tempor ipsum, in feugiat quam velit ac magna. Integer suscipit, sapien id laoreet congue, mauris neque tempor dolor, eget lacinia lacus justo nec felis.
                Nam volutpat, eros sit amet ullamcorper egestas, nisi tortor ultrices turpis, sit amet rhoncus libero quam pharetra ligula. Proin id mauris nunc, ac laoreet lectus. Aenean nisl est, ultrices id mattis eu, lacinia vel velit. Sed gravida consectetur elit, sed placerat metus pulvinar et. Sed auctor lectus nec orci laoreet viverra. In eget libero eu nisl sagittis tempus. Duis pulvinar dolor in elit gravida convallis. Nulla a lacus magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus ante tortor, consequat facilisis ultricies vel, molestie eget quam. Aenean imperdiet, sem a aliquam dictum, magna risus euismod lacus, sed ultricies sapien neque ut lorem. Donec sapien est, ullamcorper non tristique sit amet, vulputate id erat. Etiam ligula orci, semper a placerat vel, adipiscing ac neque. Ut neque nunc, luctus ac facilisis vitae, dictum ac augue. Nulla adipiscing ligula non erat tincidunt in ultricies purus molestie.
                Sed aliquam convallis nunc dictum ornare. In mollis aliquet tellus eget cursus. Praesent ante nisi, porttitor ut pellentesque ut, porta non mi. Fusce lorem nibh, consectetur eget facilisis nec, volutpat vitae mauris. Vestibulum et nunc turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vestibulum augue non mi vehicula dictum. Vivamus eget turpis tincidunt nunc commodo porttitor. Nunc sodales adipiscing ante, nec sollicitudin metus feugiat a. Morbi blandit leo sem. Sed dictum vehicula dui id eleifend. Donec quis fermentum magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nulla sed condimentum orci. Etiam magna metus, iaculis vitae euismod vitae, volutpat vel nunc. Sed varius, diam et laoreet hendrerit, justo nisl posuere odio, sit amet semper libero neque porta augue. Maecenas quis enim est, ut ultricies quam. Sed et eros dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque at cursus turpis.
                Cras tortor magna, vehicula eget scelerisque id, interdum et ante. Cras gravida magna urna, sit amet molestie sapien. Etiam at sapien ut nunc ultrices dapibus hendrerit non sapien. Praesent vel eros felis, a lacinia dolor. Praesent volutpat sollicitudin sapien, ut pellentesque lacus luctus sit amet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas id lectus vel risus facilisis mattis. Morbi urna lectus, ultricies ut fermentum sit amet, eleifend vitae nibh. Nunc ultricies malesuada odio, sit amet adipiscing mi fermentum at. Vestibulum mi purus, bibendum sit amet congue vitae, mollis imperdiet lectus. Nullam sit amet semper neque. Etiam diam sapien, dignissim ac vehicula sit amet, feugiat a sapien. Cras aliquet vulputate erat. Curabitur sed libero vitae lacus laoreet gravida vitae vitae tortor. Nulla facilisi.',
            'created_at' => ''
        )
    );

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Finds article by article id.
     *
     * @param int $id
     * @return bool|Article
     */
    public static function find($id)
    {
        $rawArticle = array();
        foreach (self::$data as $row)
        {
            if ($row['id'] == $id)
            {
                $rawArticle = $row;
                break;
            }
        }

        if ($rawArticle)
        {
            return self::instanceFromArray($rawArticle);
        }

        return false;

    }

    /**
     * @return array Gets all articles
     */
    public static function findAll()
    {
        $articles = array();

//        foreach (self::$data as $row)
//        {
//            $articles[]= self::instanceFromArray($row);
//        }
        
            $Controller = \FrontController::getInstance();
            $db = $Controller->getDbConection();
            $statement=$db->prepare('SELECT * FROM articles');
            $statement-> execute();
            $array = $statement->fetchALL (\PDO:: FETCH_ASSOC);
           
           foreach ($array as $row)
      {
           $articles[]= self::instanceFromArray($row);
      } 
            
           // die (var_dump($array));

        return $articles;
    }

    /**
     * Creates Article class instance from array.
     *
     * @param $data
     * @return Article
     */
    private static function instanceFromArray($data)
    {
        $id = null;
        $title = null;
        $short_description = null;
        $text = null;
        $created_at = null;

        extract($data, EXTR_IF_EXISTS);

        $article = new Article();
        $article->setId($id);
        $article->setTitle($title);
        $article->setShortDescription($short_description);
        $article->setText($text);
        $article->setCreatedAt($created_at);

        return $article;
    }
}
