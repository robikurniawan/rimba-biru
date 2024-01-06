// Validation errors messages for Parsley
import Parsley from '../parsley.js';

Parsley.addMessages('id', {
  defaultMessage: "tidak valid",
  type: {
    email:        "email tidak valid",
    url:          "url tidak valid",
    number:       "nomor tidak valid",
    integer:      "integer tidak valid",
    digits:       "harus berupa digit",
    alphanum:     "harus berupa alphanumeric"
  },
  notblank:       "tidak boleh kosong",
  required:       "tidak boleh kosong",
  pattern:        "tidak valid",
  min:            "harus lebih besar atau sama dengan %s.",
  max:            "harus lebih kecil atau sama dengan %s.",
  range:          "harus dalam rentang %s dan %s.",
  minlength:      "minimal %s karakter.",
  maxlength:      "maksimal %s karakter .",
  length:         "panjang karakter harus dalam rentang %s dan %s",
  mincheck:       "pilih minimal %s pilihan",
  maxcheck:       "pilih maksimal %s pilihan",
  check:          "pilih antar %s dan %s pilihan",
  equalto:        "harus sama"
});

Parsley.setLocale('id');
