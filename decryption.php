use Illuminate\Contracts\Encryption\DecryptException;

// Exception for decryption thrown in facade
try {
   $decrypted = decrypt($encryptedValue);
} catch (DecryptException $e) {
  
}
