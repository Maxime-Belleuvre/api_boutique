
    <form action="">
        <?php
        require 'vendor/autoload.php';
        use \Mailjet\Resources;
        $mj = new \Mailjet\Client('****************************1234','****************************abcd',true,['version' => 'v3.1']);
        $body = [
          'Messages' => [
            [
              'From' => [
                'Email' => "maximebelleuvre14200@gmail.com",
                'Name' => "Maxime"
              ],
              'To' => [
                [
                  'Email' => "maximebelleuvre14200@gmail.com",
                  'Name' => "Maxime"
                ]
              ],
              'Subject' => "Greetings from Mailjet.",
              'TextPart' => "My first Mailjet email",
              'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
              'CustomID' => "AppGettingStartedTest"
            ]
          ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success() && var_dump($response->getData());
      ?>
      
        <input type="submit" value="submit">
    </form>

