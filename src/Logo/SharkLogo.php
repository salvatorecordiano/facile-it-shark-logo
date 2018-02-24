<?php

namespace Facile\Cbr\Shark\Logo;

/**
 * Class SharkLogo
 * @package Facile\Cbr\Shark\Logo
 */
final class SharkLogo
{
    const SHARK = <<<SHARK
                                                   B>                           
                                                   B "Bp                        
.pp..                                              B    9p                      
 "9BBBBBBpp.                                       B      9p                    
    " ""9BBBBBBpp                          .<eeP"B B      .B b                  
           "BBBBBBBpp              .     B B     B B      )B B                  
              "BBBBBBBB>  .<pe6P\B B     B B     B B      $  B     .e           
                 5BBBBBBB B     ·B B     B B     B Bqp.  :B  B     $ 4BBpp      
                   BBBBBB B        B     B B     B B   "^Bp  B    ) |BBBBBBBpp. 
                 .BBBBBBB """9q.   B"""""B B"""""B B      1p B""""9p BBBBBBBBBBB
               <BBBBBBBBB B    "B  B     B B     B B       B B     9 9BBB< ^P"  
             6BBBBBBBBBBB B666666B B     B B     B B       9 P      7 9BBBBP
SHARK;

    /**
     * @return string
     */
    public static function getLogo()
    {
        return self::SHARK;
    }
}
