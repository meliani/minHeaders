<?php



/**

 * noHeader plugin version 0.1

 * 

 * Includes one custom header inside every email sent

 *

 * @category  phplist

 * @author    
 * @copyright 

 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License, Version 3

 * 

 * This program is free software: you can redistribute it and/or modify

 * it under the terms of the GNU General Public License as published by

 * the Free Software Foundation, either version 3 of the License, or

 * (at your option) any later version.

 *

 * This program is distributed in the hope that it will be useful,

 * but WITHOUT ANY WARRANTY; without even the implied warranty of

 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the

 * GNU General Public License for more details.



 * You should have received a copy of the GNU General Public License

 * along with this program.  If not, see <http://www.gnu.org/licenses/>

 *

 *

 *

 */



/**

 * Registers the plugin with phplist

 * 

 * @category  phplist

 * @package   customHeaderPlugin

 */



class minHeadersPlugin extends phplistPlugin

{

    /*

     *  Inherited variables

     */

    public $name = 'Min headers plugin';

    public $version = '0.1';

    public $enabled = true;

    public $authors = 'Mo Mliani';

    public $description = 'reduce headers from phplist';

	

    

    // This plugin has no web pages. So make sure that nothing appears in the 

	// dashboard menu

	function adminmenu() {

    	return array ();

  	}

	

	public function __construct()

    {



        $this->coderoot = dirname(__FILE__) . '/minHeadersPlugin/';

        

        parent::__construct();

    }

  

    

  /* messageHeaders  -- The original purpose of this function is:

   *

   * return headers for the message to be added, as "key => val"

   *

   * @param object $mail

   * @return array (headeritem => headervalue)

   *

 */

  

  /**
   * messageHeaders
   *
   * return headers for the message to be added, as "key => val"
   *
   * @param object $mail
   * @return array (headeritem => headervalue)
   */
  function messageHeaders($mail) {
    return array();
  }

}

  
