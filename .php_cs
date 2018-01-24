<?php
declare(strict_types = 1);
$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->exclude('cache')
    ->exclude('data')
    ->exclude('files')
    ->exclude('node_modules')
    ->files()
    ->name('console')
    ->name('build')
    ->name('parse')
    ->name('*.php')
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/bin')
    ->in(__DIR__ . '/mappings')
    ->in(__DIR__ . '/tests')
    ->in(__DIR__ . '/tests/curated/files/*')
    ->in(__DIR__ . '/parsers')
    ->exclude('vendor')
    ->append([__FILE__]);

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2'                                       => true,
        '@Symfony'                                    => true,
        '@Symfony:risky'                              => true,
        '@PHP70Migration'                             => true,
        '@PHP71Migration'                             => true,
        '@PHPUnit60Migration:risky'                   => true,
        'align_multiline_comment'                     => ['comment_type' => 'all_multiline'],
        'array_syntax'                                => ['syntax' => 'short'],
        'backtick_to_shell_exec'                      => true,
        'binary_operator_spaces'                      => ['default' => 'align_single_space_minimal'],
        'blank_line_after_namespace'                  => true,
        'blank_line_after_opening_tag'                => false,
        'blank_line_before_statement'                 => ['statements' => ['break', 'continue', 'declare', 'return', 'throw', 'try']],
        'braces'                                      => ['allow_single_line_closure' => false, 'position_after_anonymous_constructs' => 'same', 'position_after_control_structures' => 'same', 'position_after_functions_and_oop_constructs' => 'next'],
        'cast_spaces'                                 => ['space' => 'single'],
        'class_attributes_separation'                 => ['elements' => ['const', 'method', 'property']],
        'class_definition'                            => ['singleLine' => false, 'singleItemSingleLine' => true, 'multiLineExtendsEachSingleLine' => true],
        'class_keyword_remove'                        => false,
        'combine_consecutive_issets'                  => true,
        'combine_consecutive_unsets'                  => true,
        'compact_nullable_typehint'                   => true,
        'concat_space'                                => ['spacing' => 'one'],
        'declare_equal_normalize'                     => ['space' => 'single'],
        'declare_strict_types'                        => true,
        'dir_constant'                                => true,
        'elseif'                                      => true,
        'encoding'                                    => true,
        'ereg_to_preg'                                => true,
        'escape_implicit_backslashes'                 => ['double_quoted' => true, 'heredoc_syntax' => true, 'single_quoted' => false],
        'explicit_indirect_variable'                  => true,
        'explicit_string_variable'                    => true,
        'final_internal_class'                        => ['annotation-black-list' => ['@final', '@Entity', '@ORM'], 'annotation-white-list' => ['@internal']],
        'full_opening_tag'                            => true,
        'function_declaration'                        => ['closure_function_spacing' => 'one'],
        'function_to_constant'                        => ['functions' => ['get_class', 'php_sapi_name', 'phpversion', 'pi']],
        'function_typehint_space'                     => true,
        'general_phpdoc_annotation_remove'            => ['expectedExceptionMessageRegExp', 'expectedException', 'expectedExceptionMessage', 'author'],
        'hash_to_slash_comment'                       => true,
        'header_comment'                              => false,
        'heredoc_to_nowdoc'                           => true,
        'include'                                     => true,
        'increment_style'                             => ['style' => 'pre'],
        'indentation_type'                            => true,
        'is_null'                                     => ['use_yoda_style' => true],
        'line_ending'                                 => true,
        'linebreak_after_opening_tag'                 => true,
        'list_syntax'                                 => ['syntax' => 'short'],
        'lowercase_cast'                              => true,
        'lowercase_constants'                         => true,
        'lowercase_keywords'                          => true,
        'magic_constant_casing'                       => true,
        'mb_str_functions'                            => true,
        'method_argument_space'                       => ['ensure_fully_multiline' => true, 'keep_multiple_spaces_after_comma' => false],
        'method_chaining_indentation'                 => true,
        'method_separation'                           => true,
        'modernize_types_casting'                     => true,
        'native_function_casing'                      => true,
        'native_function_invocation'                  => false,
        'new_with_braces'                             => true,
        'no_alias_functions'                          => true,
        'no_blank_lines_after_class_opening'          => true,
        'no_blank_lines_after_phpdoc'                 => false,
        'no_blank_lines_before_namespace'             => true,
        'no_break_comment'                            => false,
        'no_closing_tag'                              => true,
        'no_empty_comment'                            => true,
        'no_empty_phpdoc'                             => true,
        'no_empty_statement'                          => true,
        'no_extra_blank_lines'                        => true,
        'no_homoglyph_names'                          => true,
        'no_leading_import_slash'                     => true,
        'no_leading_namespace_whitespace'             => true,
        'no_mixed_echo_print'                         => ['use' => 'echo'],
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_multiline_whitespace_before_semicolons'   => true,
        'no_null_property_initialization'             => true,
        'no_php4_constructor'                         => true,
        'no_short_bool_cast'                          => true,
        'no_short_echo_tag'                           => true,
        'no_singleline_whitespace_before_semicolons'  => true,
        'no_spaces_after_function_name'               => true,
        'no_spaces_around_offset'                     => ['positions' => ['inside', 'outside']],
        'no_spaces_inside_parenthesis'                => true,
        'no_superfluous_elseif'                       => true,
        'no_trailing_comma_in_list_call'              => true,
        'no_trailing_comma_in_singleline_array'       => true,
        'no_trailing_whitespace'                      => true,
        'no_trailing_whitespace_in_comment'           => true,
        'no_unneeded_control_parentheses'             => ['statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield']],
        'no_unneeded_curly_braces'                    => true,
        'no_unneeded_final_method'                    => true,
        'no_unreachable_default_argument_value'       => true,
        'no_unused_imports'                           => true,
        'no_useless_else'                             => true,
        'no_useless_return'                           => false,
        'no_whitespace_before_comma_in_array'         => true,
        'no_whitespace_in_blank_line'                 => true,
        'non_printable_character'                     => ['use_escape_sequences_in_strings' => true],
        'normalize_index_brace'                       => true,
        'not_operator_with_space'                     => false,
        'not_operator_with_successor_space'           => false,
        'object_operator_without_whitespace'          => true,
        'ordered_class_elements'                      => false,
        'ordered_imports'                             => true,
        'php_unit_construct'                          => ['assertions' => ['assertEquals', 'assertSame', 'assertNotEquals', 'assertNotSame']],
        'php_unit_dedicate_assert'                    => ['target' => 'newest'],
        'php_unit_expectation'                        => ['target' => 'newest'],
        'php_unit_fqcn_annotation'                    => true,
        'php_unit_mock'                               => ['target' => 'newest'],
        'php_unit_namespaced'                         => ['target' => 'newest'],
        'php_unit_no_expectation_annotation'          => ['target' => 'newest', 'use_class_const' => true],
        'php_unit_strict'                             => ['assertions' => ['assertAttributeEquals', 'assertAttributeNotEquals', 'assertEquals', 'assertNotEquals']],
        'php_unit_test_annotation'                    => ['case' => 'camel', 'style' => 'prefix'],
        'php_unit_test_class_requires_covers'         => false,
        'phpdoc_add_missing_param_annotation'         => ['only_untyped' => false],
        'phpdoc_align'                                => ['tags' => ['param', 'return', 'throws', 'type', 'var']],
        'phpdoc_annotation_without_dot'               => false,
        'phpdoc_indent'                               => true,
        'phpdoc_inline_tag'                           => true,
        'phpdoc_no_access'                            => true,
        'phpdoc_no_alias_tag'                         => ['property-read' => 'property', 'property-write' => 'property', 'type' => 'var'],
        'phpdoc_no_empty_return'                      => false,
        'phpdoc_no_package'                           => true,
        'phpdoc_no_useless_inheritdoc'                => true,
        'phpdoc_order'                                => true,
        'phpdoc_return_self_reference'                => true,
        'phpdoc_scalar'                               => true,
        'phpdoc_separation'                           => true,
        'phpdoc_single_line_var_spacing'              => true,
        'phpdoc_summary'                              => false,
        'phpdoc_to_comment'                           => true,
        'phpdoc_trim'                                 => true,
        'phpdoc_types'                                => true,
        'phpdoc_types_order'                          => ['null_adjustment' => 'always_last', 'sort_algorithm' => 'alpha'],
        'phpdoc_var_without_name'                     => true,
        'pow_to_exponentiation'                       => false,
        'protected_to_private'                        => true,
        'psr0'                                        => true,
        'psr4'                                        => true,
        'random_api_migration'                        => true,
        'return_type_declaration'                     => ['space_before' => 'none'],
        'self_accessor'                               => true,
        'semicolon_after_instruction'                 => true,
        'short_scalar_cast'                           => true,
        'silenced_deprecation_error'                  => true,
        'simplified_null_return'                      => false,
        'single_blank_line_at_eof'                    => true,
        'single_blank_line_before_namespace'          => false,
        'single_class_element_per_statement'          => ['elements' => ['const', 'property']],
        'single_import_per_statement'                 => true,
        'single_line_after_imports'                   => true,
        'single_line_comment_style'                   => ['comment_types' => ['asterisk', 'hash']],
        'single_quote'                                => true,
        'space_after_semicolon'                       => ['remove_in_empty_for_expressions' => true],
        'standardize_not_equals'                      => true,
        'static_lambda'                               => true,
        'strict_comparison'                           => true,
        'strict_param'                                => false,
        'switch_case_semicolon_to_colon'              => true,
        'switch_case_space'                           => true,
        'ternary_operator_spaces'                     => true,
        'ternary_to_null_coalescing'                  => false,
        'trailing_comma_in_multiline_array'           => true,
        'trim_array_spaces'                           => true,
        'unary_operator_spaces'                       => true,
        'visibility_required'                         => ['elements' => ['property', 'method', 'const']],
        'void_return'                                 => true,
        'whitespace_after_comma_in_array'             => true,
        'yoda_style'                                  => ['equal' => true, 'identical' => true, 'less_and_greater' => true],
    ])
    ->setUsingCache(true)
    ->setFinder($finder);
