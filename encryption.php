<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemoController extends Controller{
   **
      * Store a secret message for the user.
      *
      * @param Request $request
      * @param int $id
      * @return Response
   */
   
   public function storeSecret(Request $request, $id) {
      $user = User::findOrFail($id);
      $user->fill([
         'secret' => encrypt($request->secret)
      ])->save();
   }
}
?>
