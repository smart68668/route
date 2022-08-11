<?php
namespace HPlus\Route\Annotation;

use Attribute;

/**
 * @Annotation
 * @Target({"METHOD"})
 */
#[Attribute(Attribute::TARGET_METHOD)]
class DeleteApi extends Mapping
{
    public array $methods = ['DELETE'];
}
