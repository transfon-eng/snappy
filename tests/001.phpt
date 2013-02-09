--TEST--
Check snappy functionality
--SKIPIF--
<?php if (!extension_loaded("snappy")) print "skip"; ?>
--FILE--
<?php 
$data = <<<EOF
/bin/sh /usr/src/php-5.4.11/libtool --preserve-dup-deps --mode=link cc -export-dynamic -g -fvisibility=hidden -O0 -Wall  -L/lib  -R /lib ext/date/php_date.lo ext/date/lib/astro.lo ext/date/lib/dow.lo ext/date/lib/parse_date.lo ext/date/lib/parse_tz.lo ext/date/lib/timelib.lo ext/date/lib/tm2unixtime.lo ext/date/lib/unixtime2tm.lo ext/date/lib/parse_iso_intervals.lo ext/date/lib/interval.lo ext/ereg/ereg.lo ext/ereg/regex/regcomp.lo ext/ereg/regex/regexec.lo ext/ereg/regex/regerror.lo ext/ereg/regex/regfree.lo ext/pcre/pcrelib/pcre_chartables.lo ext/pcre/pcrelib/pcre_ucd.lo ext/pcre/pcrelib/pcre_compile.lo ext/pcre/pcrelib/pcre_config.lo ext/pcre/pcrelib/pcre_exec.lo ext/pcre/pcrelib/pcre_fullinfo.lo ext/pcre/pcrelib/pcre_get.lo ext/pcre/pcrelib/pcre_globals.lo ext/pcre/pcrelib/pcre_maketables.lo ext/pcre/pcrelib/pcre_newline.lo ext/pcre/pcrelib/pcre_ord2utf8.lo ext/pcre/pcrelib/pcre_refcount.lo ext/pcre/pcrelib/pcre_study.lo ext/pcre/pcrelib/pcre_tables.lo ext/pcre/pcrelib/pcre_valid_utf8.lo ext/pcre/pcrelib/pcre_version.lo ext/pcre/pcrelib/pcre_xclass.lo ext/pcre/php_pcre.lo ext/reflection/php_reflection.lo ext/snappy/snappy.lo ext/spl/php_spl.lo ext/spl/spl_functions.lo ext/spl/spl_engine.lo ext/spl/spl_iterators.lo ext/spl/spl_array.lo ext/spl/spl_directory.lo ext/spl/spl_exceptions.lo ext/spl/spl_observer.lo ext/spl/spl_dllist.lo ext/spl/spl_heap.lo ext/spl/spl_fixedarray.lo ext/standard/crypt_freesec.lo ext/standard/crypt_blowfish.lo ext/standard/crypt_sha512.lo ext/standard/crypt_sha256.lo ext/standard/php_crypt_r.lo ext/standard/array.lo ext/standard/base64.lo ext/standard/basic_functions.lo ext/standard/browscap.lo ext/standard/crc32.lo ext/standard/crypt.lo ext/standard/cyr_convert.lo ext/standard/datetime.lo ext/standard/dir.lo ext/standard/dl.lo ext/standard/dns.lo ext/standard/exec.lo ext/standard/file.lo ext/standard/filestat.lo ext/standard/flock_compat.lo ext/standard/formatted_print.lo ext/standard/fsock.lo ext/standard/head.lo ext/standard/html.lo ext/standard/image.lo ext/standard/info.lo ext/standard/iptc.lo ext/standard/lcg.lo ext/standard/link.lo ext/standard/mail.lo ext/standard/math.lo ext/standard/md5.lo ext/standard/metaphone.lo ext/standard/microtime.lo ext/standard/pack.lo ext/standard/pageinfo.lo ext/standard/quot_print.lo ext/standard/rand.lo ext/standard/soundex.lo ext/standard/string.lo ext/standard/scanf.lo ext/standard/syslog.lo ext/standard/type.lo ext/standard/uniqid.lo ext/standard/url.lo ext/standard/var.lo ext/standard/versioning.lo ext/standard/assert.lo ext/standard/strnatcmp.lo ext/standard/levenshtein.lo ext/standard/incomplete_class.lo ext/standard/url_scanner_ex.lo ext/standard/ftp_fopen_wrapper.lo ext/standard/http_fopen_wrapper.lo ext/standard/php_fopen_wrapper.lo ext/standard/credits.lo ext/standard/css.lo ext/standard/var_unserializer.lo ext/standard/ftok.lo ext/standard/sha1.lo ext/standard/user_filters.lo ext/standard/uuencode.lo ext/standard/filters.lo ext/standard/proc_open.lo ext/standard/streamsfuncs.lo ext/standard/http.lo TSRM/TSRM.lo TSRM/tsrm_strtok_r.lo TSRM/tsrm_virtual_cwd.lo main/main.lo main/snprintf.lo main/spprintf.lo main/php_sprintf.lo main/fopen_wrappers.lo main/alloca.lo main/php_scandir.lo main/php_ini.lo main/SAPI.lo main/rfc1867.lo main/php_content_types.lo main/strlcpy.lo main/strlcat.lo main/mergesort.lo main/reentrancy.lo main/php_variables.lo main/php_ticks.lo main/network.lo main/php_open_temporary_file.lo main/php_logos.lo main/output.lo main/getopt.lo main/streams/streams.lo main/streams/cast.lo main/streams/memory.lo main/streams/filter.lo main/streams/plain_wrapper.lo main/streams/userspace.lo main/streams/transports.lo main/streams/xp_socket.lo main/streams/mmap.lo main/streams/glob_wrapper.lo Zend/zend_language_parser.lo Zend/zend_language_scanner.lo Zend/zend_ini_parser.lo Zend/zend_ini_scanner.lo Zend/zend_alloc.lo Zend/zend_compile.lo Zend/zend_constants.lo Zend/zend_dynamic_array.lo Zend/zend_dtrace.lo Zend/zend_execute_API.lo Zend/zend_highlight.lo Zend/zend_llist.lo Zend/zend_opcode.lo Zend/zend_operators.lo Zend/zend_ptr_stack.lo Zend/zend_stack.lo Zend/zend_variables.lo Zend/zend.lo Zend/zend_API.lo Zend/zend_extensions.lo Zend/zend_hash.lo Zend/zend_list.lo Zend/zend_indent.lo Zend/zend_builtin_functions.lo Zend/zend_sprintf.lo Zend/zend_ini.lo Zend/zend_qsort.lo Zend/zend_multibyte.lo Zend/zend_ts_hash.lo Zend/zend_stream.lo Zend/zend_iterators.lo Zend/zend_interfaces.lo Zend/zend_exceptions.lo Zend/zend_strtod.lo Zend/zend_gc.lo Zend/zend_closures.lo Zend/zend_float.lo Zend/zend_string.lo Zend/zend_signal.lo Zend/zend_objects.lo Zend/zend_object_handlers.lo Zend/zend_objects_API.lo Zend/zend_default_classes.lo Zend/zend_execute.lo main/internal_functions_cli.lo sapi/cgi/cgi_main.lo sapi/cgi/fastcgi.lo -lcrypt -lresolv -lcrypt -lsnappy -lrt -lm -ldl -lnsl -lcrypt -lcrypt  -o sapi/cgi/php-cgi
cc -g -fvisibility=hidden -O0 -Wall ext/date/php_date.o ext/date/lib/astro.o ext/date/lib/dow.o ext/date/lib/parse_date.o ext/date/lib/parse_tz.o ext/date/lib/timelib.o ext/date/lib/tm2unixtime.o ext/date/lib/unixtime2tm.o ext/date/lib/parse_iso_intervals.o ext/date/lib/interval.o ext/ereg/ereg.o ext/ereg/regex/regcomp.o ext/ereg/regex/regexec.o ext/ereg/regex/regerror.o ext/ereg/regex/regfree.o ext/pcre/pcrelib/pcre_chartables.o ext/pcre/pcrelib/pcre_ucd.o ext/pcre/pcrelib/pcre_compile.o ext/pcre/pcrelib/pcre_config.o ext/pcre/pcrelib/pcre_exec.o ext/pcre/pcrelib/pcre_fullinfo.o ext/pcre/pcrelib/pcre_get.o ext/pcre/pcrelib/pcre_globals.o ext/pcre/pcrelib/pcre_maketables.o ext/pcre/pcrelib/pcre_newline.o ext/pcre/pcrelib/pcre_ord2utf8.o ext/pcre/pcrelib/pcre_refcount.o ext/pcre/pcrelib/pcre_study.o ext/pcre/pcrelib/pcre_tables.o ext/pcre/pcrelib/pcre_valid_utf8.o ext/pcre/pcrelib/pcre_version.o ext/pcre/pcrelib/pcre_xclass.o ext/pcre/php_pcre.o ext/reflection/php_reflection.o ext/snappy/snappy.o ext/spl/php_spl.o ext/spl/spl_functions.o ext/spl/spl_engine.o ext/spl/spl_iterators.o ext/spl/spl_array.o ext/spl/spl_directory.o ext/spl/spl_exceptions.o ext/spl/spl_observer.o ext/spl/spl_dllist.o ext/spl/spl_heap.o ext/spl/spl_fixedarray.o ext/standard/crypt_freesec.o ext/standard/crypt_blowfish.o ext/standard/crypt_sha512.o ext/standard/crypt_sha256.o ext/standard/php_crypt_r.o ext/standard/array.o ext/standard/base64.o ext/standard/basic_functions.o ext/standard/browscap.o ext/standard/crc32.o ext/standard/crypt.o ext/standard/cyr_convert.o ext/standard/datetime.o ext/standard/dir.o ext/standard/dl.o ext/standard/dns.o ext/standard/exec.o ext/standard/file.o ext/standard/filestat.o ext/standard/flock_compat.o ext/standard/formatted_print.o ext/standard/fsock.o ext/standard/head.o ext/standard/html.o ext/standard/image.o ext/standard/info.o ext/standard/iptc.o ext/standard/lcg.o ext/standard/link.o ext/standard/mail.o ext/standard/math.o ext/standard/md5.o ext/standard/metaphone.o ext/standard/microtime.o ext/standard/pack.o ext/standard/pageinfo.o ext/standard/quot_print.o ext/standard/rand.o ext/standard/soundex.o ext/standard/string.o ext/standard/scanf.o ext/standard/syslog.o ext/standard/type.o ext/standard/uniqid.o ext/standard/url.o ext/standard/var.o ext/standard/versioning.o ext/standard/assert.o ext/standard/strnatcmp.o ext/standard/levenshtein.o ext/standard/incomplete_class.o ext/standard/url_scanner_ex.o ext/standard/ftp_fopen_wrapper.o ext/standard/http_fopen_wrapper.o ext/standard/php_fopen_wrapper.o ext/standard/credits.o ext/standard/css.o ext/standard/var_unserializer.o ext/standard/ftok.o ext/standard/sha1.o ext/standard/user_filters.o ext/standard/uuencode.o ext/standard/filters.o ext/standard/proc_open.o ext/standard/streamsfuncs.o ext/standard/http.o TSRM/TSRM.o TSRM/tsrm_strtok_r.o TSRM/tsrm_virtual_cwd.o main/main.o main/snprintf.o main/spprintf.o main/php_sprintf.o main/fopen_wrappers.o main/alloca.o main/php_scandir.o main/php_ini.o main/SAPI.o main/rfc1867.o main/php_content_types.o main/strlcpy.o main/strlcat.o main/mergesort.o main/reentrancy.o main/php_variables.o main/php_ticks.o main/network.o main/php_open_temporary_file.o main/php_logos.o main/output.o main/getopt.o main/streams/streams.o main/streams/cast.o main/streams/memory.o main/streams/filter.o main/streams/plain_wrapper.o main/streams/userspace.o main/streams/transports.o main/streams/xp_socket.o main/streams/mmap.o main/streams/glob_wrapper.o Zend/zend_language_parser.o Zend/zend_language_scanner.o Zend/zend_ini_parser.o Zend/zend_ini_scanner.o Zend/zend_alloc.o Zend/zend_compile.o Zend/zend_constants.o Zend/zend_dynamic_array.o Zend/zend_dtrace.o Zend/zend_execute_API.o Zend/zend_highlight.o Zend/zend_llist.o Zend/zend_opcode.o Zend/zend_operators.o Zend/zend_ptr_stack.o Zend/zend_stack.o Zend/zend_variables.o Zend/zend.o Zend/zend_API.o Zend/zend_extensions.o Zend/zend_hash.o Zend/zend_list.o Zend/zend_indent.o Zend/zend_builtin_functions.o Zend/zend_sprintf.o Zend/zend_ini.o Zend/zend_qsort.o Zend/zend_multibyte.o Zend/zend_ts_hash.o Zend/zend_stream.o Zend/zend_iterators.o Zend/zend_interfaces.o Zend/zend_exceptions.o Zend/zend_strtod.o Zend/zend_gc.o Zend/zend_closures.o Zend/zend_float.o Zend/zend_string.o Zend/zend_signal.o Zend/zend_objects.o Zend/zend_object_handlers.o Zend/zend_objects_API.o Zend/zend_default_classes.o Zend/zend_execute.o main/internal_functions_cli.o sapi/cgi/cgi_main.o sapi/cgi/fastcgi.o -o sapi/cgi/php-cgi -Wl,--export-dynamic  -L/lib -lcrypt -lresolv -lcrypt -lsnappy -lrt -lm -ldl -lnsl -lcrypt -lcrypt   -Wl,--rpath -Wl,/lib
EOF;

$compressed = snappy_compress($data);
var_dump(strlen($compressed));
var_dump(snappy_validate($compressed));
$decompressed = snappy_uncompress($compressed);
var_dump(strlen($decompressed));
?>
--EXPECT--
int(3306)
bool(true)
int(9503)
