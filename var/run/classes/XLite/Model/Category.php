<?php
namespace XLite\Model;
/**
 * Category
 *
 * @Entity
 * @Table  (name="categories",
 *      indexes={
 *          @Index (name="lpos", columns={"lpos"}),
 *          @Index (name="rpos", columns={"rpos"}),
 *          @Index (name="enabled", columns={"enabled"})
 *      }
 * )
 */
class Category extends \XLite\Module\CDev\FeaturedProducts\Model\Category {}