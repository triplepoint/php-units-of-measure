<?php
// ============================================================================
// WARNING! - This file and others like it are auto-generated by the build
// script.  Please do not edit it directly.  See the physical_quantities.yml
// file in the project root, and the build tooling in the /build directory.
// ============================================================================

namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;

class Acceleration extends AbstractPhysicalQuantity
{
    protected static $unitDefinitions;

    protected static function initialize()
    {
        $newUnit = UnitOfMeasure::nativeUnitFactory('m/s^2');
        $newUnit->addAlias('m/s²');
        $newUnit->addAlias('meter per second squared');
        $newUnit->addAlias('meters per second squared');
        $newUnit->addAlias('metre per second squared');
        $newUnit->addAlias('metres per second squared');
        static::addUnit($newUnit);

    }
}
