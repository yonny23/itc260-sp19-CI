<?php
//application/controllers/Pics.php
class Pics extends CI_Controller {

        public function __construct()
        {
            
                            $this->load->model('Pics_model');

                /*
                parent::__construct();
                $this->config->set_item('banner', 'Seattle Sports News Section');
                $this->load->model('news_model');
                $this->load->helper('url_helper');
                */
        }

          public function index($tags)
    {
            
            

        $tags = 'Mariners';
              $pics = $this->pics_model->get_pics($tags);
              
              
foreach($pics as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
 
}
              
                
              
              
              /*
              $this->config->set_item('title','Seattle Sports News');
            $nav1 = $this->config->item('nav1');
              
              //var_dump($nav1);
              //die;
              
            $data['news'] = $this->news_model->get_news();
            $data['title'] = 'News archive';

            $this->load->view('news/index', $data);
            */
    }

            public function view($slug = NULL)
            {
                
                /*
                slug, without dashes 
                uppercase slug words
                use dashless slug for the title 
                maybe add, 'news flash - ' 
                
                */
                //slug without dashes
                //$dashless_slug = str_replace("-", " ", $slug);
                
                /*
                //uppercase slug words
                $dashless_slug = ucwords($dashless_slug);
                
                //use dashless slug for the title
                $this->config->set_item('title', 'News Flash -' . $dashless_slug);


                
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item']))
                {
                    show_404();
                }

                $data['title'] = $data['news_item']['title'];

                $this->load->view('news/view', $data);
                */
            }
    
    
        

    
     }