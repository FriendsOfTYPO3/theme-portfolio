<?php declare(strict_types=1);

namespace FriendsOfTYPO3\ThemePortfolio\ViewHelpers;

use Closure;
use FriendsOfTYPO3\ThemePortfolio\Utility\SvgUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Exception;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

/**
 * InlineSvgViewHelper
 */
class InlineSvgViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    /**
     * @var bool
     */
    protected $escapeOutput = false;

    /**
     * Initialize arguments.
     *
     * @throws Exception
     * @return void
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();
        $this->registerArgument('image', 'object', 'a FAL object');
        $this->registerArgument('src', 'string', 'a path to a file');
        $this->registerArgument('class', 'string', 'Css class for the svg');
        $this->registerArgument('width', 'string', 'Width of the svg.');
        $this->registerArgument('height', 'string', 'Height of the svg.');
    }

    /**
     * @param array $arguments
     * @param Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     * @return string
     * @throws \Exception
     */
    public static function renderStatic(
        array $arguments,
        Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ): string {
        $src = (string)$arguments['src'];
        $image = $arguments['image'];
        $width = $arguments['width'] ? (int) $arguments['width'] : null;
        $height = $arguments['height'] ? (int) $arguments['height'] : null;
        $class = $arguments['class'] ? (string) $arguments['class'] : null;

        return SvgUtility::getInlineSvg($src, $image, $width, $height, $class);
    }
}